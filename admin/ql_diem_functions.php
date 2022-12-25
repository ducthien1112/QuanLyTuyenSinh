<?php 

    require_once 'libs/SimpleXLSX.php';

    use Shuchkin\SimpleXLSX;

    /**
     * Get param url
     * */
    $mon_filter = '';
    if(isset($_GET['mon'])){
        if(getTenMon($_GET['mon'])!=''){
            $mon_filter = $_GET['mon'];
        }
    }

    /**
     * Xử lí trang
     * */

    $errorExcel = [];
    $isImportExcel = false;
    if(isset($_POST['excelSave'])){
        $id_phong_thi = $_POST['idPhongThi'];
        $filename = $_FILES['excelIp']['tmp_name'];
        if ($xlsx = SimpleXLSX::parse($filename)) {
            $data = $xlsx->rows();

            $isvalidFileExcelFormat = validateFileExcelFormat($data);

            if($isvalidFileExcelFormat){
                array_shift($data);
                $isValidSBD = validateSBD($data, $id_phong_thi);
                $isValidScore = validateScore($data);

                if($isValidSBD && $isValidScore){
                    foreach ($data as $key => $value) {
                        $sbd = $value['0'];
                        $diem = round($value['5'], 2);
                        $fieldName = getFieldName($mon_filter);
                        $sql = "UPDATE `diem` SET `$fieldName`=$diem WHERE `sbd`='$sbd'";
                        mysqli_query($conn, $sql);
                    }
                    $isImportExcel = true;
                }

            }

        } else {
            echo SimpleXLSX::parseError();
        }
    }


    function validateFileExcelFormat($data){
        GLOBAL $errorExcel;
        $isvalidFileExcelFormat = true;
        foreach ($data as $key => $value) {
            if(!count($value)==6){
                $isvalidFileExcelFormat = false;
                continue;
            }
        
            $isValidContent = !($data[0][0] != "Số báo danh" || $data[0][1] != "Họ và tên" || $data[0][2] != "Giới tính" || $data[0][3] != "Ngày sinh" || $data[0][4] != "Số điện thoại" || $data[0][5] != "Điểm");
            if($key==0 && $isValidContent==false){
                $errorExcel[] = 'Cấu trúc nội dung file excel không chính xác, vui lòng truy cập trang <a href="danh_sach_phong_thi.php">Danh sách phòng thi</a> và chọn phòng thi mong muốn và tải file Excel mẫu!';
                $isvalidFileExcelFormat = false;
            }
        }
        return $isvalidFileExcelFormat;
    }

    function validateSBD($data, $id_phong_thi)
    {
        GLOBAL $conn;
        GLOBAL $errorExcel;
        $sql = "SELECT id_hoc_sinh FROM `hoc_sinh` WHERE `id_phong_thi_van`= $id_phong_thi OR `id_phong_thi_toan` = $id_phong_thi OR `id_phong_thi_chuyen` = $id_phong_thi";
        $result = mysqli_query($conn, $sql);
        $listTS = [];
        while($row = mysqli_fetch_assoc($result)){
            $listTS[] = $row['id_hoc_sinh'];
        }
        $isvalid = true;
        foreach ($data as $key => $TS) {
            if(!in_array($TS['0'], $listTS)){
                $errorExcel[] = 'Số báo danh <'.$TS['0'].'> không chính xác trong phòng thi này!';
                $isvalid =  false;
            }
        }
        return $isvalid;
    }

    function validateScore($data)
    {
        GLOBAL $errorExcel;
        $isvalid = true;
        foreach ($data as $key => $TS) {
            if(!is_numeric($TS['5'])){
                $errorExcel[] = 'Vui lòng nhập điểm cho SBD <'.$TS['0'].'> là số thực!';
                $isvalid =  false;
            }
            else if($TS['5'] < 0 || $TS['5'] > 10){
                $errorExcel[] = 'Vui lòng nhập điểm cho SBD <'.$TS['0'].'> là số lớn hơn hoặc bằng 0 và nhỏ hơn hoặc bằng 10!';
                $isvalid =  false;
            }
        }
        return $isvalid;
    }

	function getScore($mon_filter, $sbd)
    {
        GLOBAL $conn;
        $sql = "SELECT * FROM diem WHERE sbd = '$sbd'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $fieldName = getFieldName($mon_filter);
        return $row[$fieldName] ?? "";
    }


    function getFieldName($mon_filter){
    	$fieldName = '';
    	if($mon_filter==1){
            $fieldName = "diem_toan";
        }
        else if($mon_filter==2){
            $fieldName = "diem_van";
        }
        else{
            $fieldName = "diem_chuyen";
        }
        return $fieldName;
    }

 ?>