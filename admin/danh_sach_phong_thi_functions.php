<?php
	include_once "cong_dk_functions.php";
	include_once 'danh_sach_tsdk_functions.php'; 
	include_once 'libs/xlsxwriter.class.php'; 
	
	/**
	 * Setlocale UTF8 For sort vietnamese string
	 * */
	setlocale(LC_COLLATE, 'de_DE.UTF8', 'de.UTF8', 'de_DE.UTF-8', 'de.UTF-8');

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

	$trangThaiSapXepPhong = getTrangThaiSapXepPhong();
	$msg_SapXep = false; 
	$msg_EndTimeCDK = false;
	if(isset($_POST['btnSapXep']) && $trangThaiSapXepPhong==false){
		if(!checkEndTimeCongDK()){
			$msg_EndTimeCDK = true;
		}
		else{

			$so_luong_mot_phong = 20;

	        // Lấy tất cả danh sách hồ sơ đã thanh toán được sort theo mon_thi_chuyen
	        $listHoSo = getListHoSo();

	        // Sort danh sách thứ tự họ tên theo alphabet 
        	uasort($listHoSo, 'sortFullNameVietnamese');

	        // Lấy ra danh sách phòng thi toán chung
	        $listPhongToan = getlistPhongToan();
	    
	        // Lấy ra danh sách phòng thi văn chung
	        $listPhongVan = getlistPhongVan();;
	        


	        // Sắp xếp phòng thi chung
	        $listHoSo = sapXepPhongThiChung($listHoSo, $listPhongToan, $listPhongVan, $so_luong_mot_phong);

	        // Lấy ra danh sách phong thi cho tất cả môn chuyên
	        $listPhongThiChuyen = getListPhongThiChuyen();

	        // Lấy danh sách sort theo môn chuyên
	        $listHoSoXepChuyen = getListHoSo();

	        // Sắp xếp phòng thi chuyên cho từng id_ho_so
	        $listHoSoPhongChuyen = sapXepPhongThiChuyen($listHoSoXepChuyen, $listPhongThiChuyen, $so_luong_mot_phong);
	        
	        // Merge danh sách phòng chuyên theo id_ho_so vừa tạo vào danh sách chính
	        $listHoSo = mergeDanhSachPhongChuyen($listHoSo, $listHoSoPhongChuyen);
	        
	        // Cất dữ liệu thông tin danh sách phòng thi 
	        $listHoSo = insertSapXepDanhSachPhongThi($listHoSo);

	        // Insert danh sách điểm chờ cập nhật
	        insertDanhSachDiem($listHoSo);
	        $trangThaiSapXepPhong = true;
	        $msg_SapXep = true;
	    }
	}

	if(isset($_POST['btnExcel'])){
		$id_phong = $_POST['idPhong'];

		$listTSPhongThi = getListTSPhongThi($id_phong, $mon_filter);

		$tenPhong = $listTSPhongThi[$id_phong][0]['ten_phong'];
		$loai_mon = ($mon_filter==1 || $mon_filter==2) ? " chung" : " chuyên";
		$tenMon = getTenMon($mon_filter).$loai_mon;
		$thoigian = str_replace(':', '-', $listTSPhongThi['thoi_gian_thi']);


		$filename = "Phòng $tenPhong - $tenMon - $thoigian.xlsx";
		header('Content-disposition: attachment; filename="'.XLSXWriter::sanitize_filename($filename).'"');
		header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		header('Content-Transfer-Encoding: binary');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');

		$rows = [];		
		foreach ($listTSPhongThi[$id_phong] as $key => $thiSinh) {
			$rows[] = [
				$thiSinh['id_hoc_sinh'],
				$thiSinh['ten'],
				$thiSinh['gioi_tinh'],
				$thiSinh['ngay_sinh'],
				$thiSinh['phone']
			];
		}

		$header = array(
		  'Số báo danh'=>'string',
		  'Họ và tên'=>'string',
		  'Giới tính'=>'string',
		  'Ngày sinh'=>'date',
		  'Số điện thoại'=>'string',
		  'Điểm'=>'string'
		);

		$writer = new XLSXWriter();
		$writer->setAuthor('Admin_QLTS'); 
		$writer->writeSheetHeader('Sheet1', $header);
		foreach($rows as $row)
			$writer->writeSheetRow('Sheet1', $row);
		$writer->writeToStdOut();
		
	}



	/**
	 * Define function
	 * */

	function getTrangThaiSapXepPhong()
	{
		$trangThaiSapXepPhong = false;
        GLOBAL $conn;
        $sql = "SELECT * FROM hoc_sinh";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $trangThaiSapXepPhong = true; 
        }
        return $trangThaiSapXepPhong;
	}


	function xapXepDanhSachPhongThi(){
		GLOBAL $conn;
        $sql = "";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $trangThaiSapXepPhong = true; 
        }
        return $trangThaiSapXepPhong;
	}

	function getListHoSo(){
		GLOBAL $conn;
		$sql = "SELECT * FROM ho_so WHERE thanh_toan_le_phi = 1 ORDER BY mon_thi_chuyen ASC, ten ASC";
        $result = mysqli_query($conn, $sql);
        $listHoSo = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $listHoSo[] = $row;
        }
        return $listHoSo;
	}
	function getlistPhongToan(){
		GLOBAL $conn;
		$listPhongToan = [];
        $sql = "SELECT id_phong_thi FROM phong_thi WHERE id_mon = 1 order by thoi_gian_thi";
        $result = mysqli_query($conn, $sql);    
        while ($row = mysqli_fetch_assoc($result)) {
            $listPhongToan[] = $row['id_phong_thi'];
        }
        return $listPhongToan;
	}
	function getlistPhongVan(){
		GLOBAL $conn;
		$sql = "SELECT id_phong_thi FROM phong_thi WHERE id_mon = 2 order by thoi_gian_thi";
        $result = mysqli_query($conn, $sql);    
        while ($row = mysqli_fetch_assoc($result)) {
            $listPhongVan[] = $row['id_phong_thi'];
        }
        return $listPhongVan;
	}
	function getListPhongThiChuyen(){
		GLOBAL $conn;
		$sql = "SELECT id_mon, id_phong_thi, thoi_gian_thi, ten_phong FROM phong_thi WHERE id_mon NOT IN (1, 2) order by id_mon ASC, thoi_gian_thi ASC";
        $result = mysqli_query($conn, $sql);
        $listPhongThiChuyen = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $id_mon_chuyen = $row['id_mon'];
            $listPhongThiChuyen[$id_mon_chuyen][] = $row['id_phong_thi'];
        }
        return $listPhongThiChuyen;
	}


	function sapXepPhongThiChung($listHoSo, $listPhongToan, $listPhongVan, $so_luong_mot_phong)
	{
		$count_thi_sinh_1Phong = 1;
        foreach ($listHoSo as $key => $hoSo) {
            if($count_thi_sinh_1Phong > $so_luong_mot_phong){
                $count_thi_sinh_1Phong = 1;
                array_shift($listPhongToan);
                array_shift($listPhongVan);
            }

            $listHoSo[$key]['id_phong_thi_toan'] = $listPhongToan[0];        
            $listHoSo[$key]['id_phong_thi_van'] = $listPhongVan[0];        
            $count_thi_sinh_1Phong++;
        }
        return $listHoSo;
	}

	function sapXepPhongThiChuyen($listHoSo, $listPhongThiChuyen, $so_luong_mot_phong)
	{
		$count_thi_sinh_1Phong = 1;
		$old_id_mon_chuyen = '';
		$listHoSoPhongChuyen = [];
        foreach ($listHoSo as $key => $hoSo) {
            $id_mon_chuyen = $hoSo['mon_thi_chuyen'];
            if(($count_thi_sinh_1Phong > $so_luong_mot_phong) || ($old_id_mon_chuyen!='' && $old_id_mon_chuyen!=$id_mon_chuyen)){
                $count_thi_sinh_1Phong = 1;
                array_shift($listPhongThiChuyen[$id_mon_chuyen]);
            }
            $id_ho_so = $hoSo['id_ho_so'];
            $listHoSoPhongChuyen[$id_ho_so] = $listPhongThiChuyen[$id_mon_chuyen][0];
            $count_thi_sinh_1Phong++;
			$old_id_mon_chuyen = $id_mon_chuyen;
        }
        return $listHoSoPhongChuyen;
	}

	function insertSapXepDanhSachPhongThi($listHoSo){
        $sbd = 0;
        GLOBAL $conn;
        foreach ($listHoSo as $key => $hoSo) {
            ++$sbd;
            $sbd_db = str_pad($sbd, 4, '0', STR_PAD_LEFT);
            
            $listHoSo[$key]['sbd'] = $sbd_db;
            $ten = $hoSo['ten'];
            $phone = $hoSo['phone'];
            $ngay_sinh = $hoSo['ngay_sinh'];
            $gioi_tinh = $hoSo['gioi_tinh'];
            $id_ho_so = $hoSo['id_ho_so'];
            $id_phong_thi_van = $hoSo['id_phong_thi_van'];
            $id_phong_thi_toan = $hoSo['id_phong_thi_toan'];
            $id_phong_thi_chuyen = $hoSo['id_phong_thi_chuyen'];
            $sql = "INSERT INTO `hoc_sinh`(`id_hoc_sinh`, `ten`, `phone`, `ngay_sinh`, `gioi_tinh`, `id_phong_thi_van`, `id_ho_so`, `id_phong_thi_toan`, `id_phong_thi_chuyen`) VALUES ('$sbd_db','$ten','$phone','$ngay_sinh','$gioi_tinh','$id_phong_thi_van','$id_ho_so','$id_phong_thi_toan','$id_phong_thi_chuyen')";
            mysqli_query($conn, $sql);
        }
        return $listHoSo;
	}

	function checkEndTimeCongDK(){
		$congDK = getCongDK();
		if(strtotime($congDK['end_time']) <= strtotime(date("Y-m-d h:i:sa"))){
			return true;
		}
		return false;
	}


	function getListMon(){
		GLOBAL $conn;
        $sql = "SELECT * FROM mon";
        $result = mysqli_query($conn, $sql);
        $listMon = [];
        while($row = mysqli_fetch_assoc($result)){
        	$listMon[] = $row;
        }
        return $listMon;
	}

	function getListPhongThi($mon_filter)
	{
		GLOBAL $conn;
		$fieldNameInnerJoinDB = [
            1 => 'id_phong_thi_toan', 
            2 => 'id_phong_thi_van' 
        ];
        $fieldNameInnerJoinsSQL = $fieldNameInnerJoinDB[$mon_filter] ?? "id_phong_thi_chuyen";
        $sql = "SELECT * FROM hoc_sinh INNER JOIN phong_thi ON hoc_sinh.$fieldNameInnerJoinsSQL=phong_thi.id_phong_thi WHERE phong_thi.id_mon = '$mon_filter'";
        $result = mysqli_query($conn, $sql);
        $listPhongThi = [];
        while($row = mysqli_fetch_assoc($result)){
            $id_phong = $row['id_phong'];
            $listPhongThi[$id_phong][] = [
                'id_hoc_sinh' => $row['id_hoc_sinh'],
                'ten' => $row['ten'],
                'phone' => $row['phone'],
                'ngay_sinh' => $row['ngay_sinh'],
                'gioi_tinh' => $row['gioi_tinh'],
                'ten_phong' => $row['ten_phong'],
                'id_phong_thi' => $row['id_phong_thi']
            ];
        }
        return $listPhongThi;
	}

	function insertDanhSachDiem($listHoSo)
	{
		GLOBAL $conn;
        foreach ($listHoSo as $key => $hoSo) {
        	$sbd = $hoSo['sbd'];
            $sql = "INSERT INTO `diem`(`sbd`, `diem_toan`, `diem_van`, `diem_chuyen`) VALUES ('$sbd', null, null, null)";
            mysqli_query($conn, $sql);
        }
	}


	function sortFullNameVietnamese($a, $b) {
		// Get fullName
		$a = $a['ten'];
		$b = $b['ten'];

	    // Get LastName
	    $lastNamea = substr($a, strrpos($a, ' ')+1);
	    $lastNameb = substr($b, strrpos($b, ' ')+1);
	    
	    // Get FirstName
	    $firstNamea = substr($a, 0, strrpos($a, ' '));
	    $firstNameb = substr($b, 0, strrpos($b, ' '));
	    
	    // Compare
	    $cmpLastName = strcoll($lastNamea, $lastNameb);
	    return $cmpLastName==0 ? strcoll($firstNamea, $firstNameb) : $cmpLastName;
	}

	function mergeDanhSachPhongChuyen($listHoSo, $listHoSoPhongChuyen){
		foreach ($listHoSo as $key => $hoSo) {
        	$id_ho_so = $hoSo['id_ho_so'];
        	$listHoSo[$key]['id_phong_thi_chuyen'] = $listHoSoPhongChuyen[$id_ho_so];
        }
        return $listHoSo;
	}

	function getListTSPhongThi($id_phong, $mon_filter)
	{
		GLOBAL $conn;
		$fieldNameInnerJoinDB = [
            1 => 'id_phong_thi_toan', 
            2 => 'id_phong_thi_van' 
        ];
        $fieldNameInnerJoinsSQL = $fieldNameInnerJoinDB[$mon_filter] ?? "id_phong_thi_chuyen";
        $sql = "SELECT * FROM hoc_sinh INNER JOIN phong_thi ON hoc_sinh.$fieldNameInnerJoinsSQL=phong_thi.id_phong_thi WHERE phong_thi.id_mon = '$mon_filter' AND phong_thi.id_phong='$id_phong' ORDER BY `hoc_sinh`.`id_hoc_sinh` ASC";
        $result = mysqli_query($conn, $sql);
        $listPhongThi = [];
        $thoi_gian_thi = '';
        while($row = mysqli_fetch_assoc($result)){
            $id_phong = $row['id_phong'];
            $listPhongThi[$id_phong][] = [
                'id_hoc_sinh' => $row['id_hoc_sinh'],
                'ten' => $row['ten'],
                'phone' => $row['phone'],
                'ngay_sinh' => $row['ngay_sinh'],
                'gioi_tinh' => $row['gioi_tinh'],
                'ten_phong' => $row['ten_phong']
            ];
            $thoi_gian_thi = $row['thoi_gian_thi'];
        }
        $listPhongThi['thoi_gian_thi'] = $thoi_gian_thi;
        return $listPhongThi;
	}
 ?>