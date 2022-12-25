<?php 


	function getListPhongThiPhucKhao($mon_filter)
	{
		GLOBAL $conn;
		$fieldNameInnerJoinDB = [
            1 => 'id_phong_thi_toan', 
            2 => 'id_phong_thi_van' 
        ];
        $fieldNameInnerJoinsSQL = $fieldNameInnerJoinDB[$mon_filter] ?? "id_phong_thi_chuyen";
        $sql = "SELECT * FROM hoc_sinh INNER JOIN phong_thi ON hoc_sinh.$fieldNameInnerJoinsSQL=phong_thi.id_phong_thi INNER JOIN don_phuc_khao ON hoc_sinh.id_hoc_sinh=don_phuc_khao.sbd WHERE don_phuc_khao.id_mon = '$mon_filter'";
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


	function getDiemTruocPk($id_hoc_sinh, $id_phong_thi)
	{
		GLOBAL $conn;
		$sql = "SELECT diem_hien_tai FROM `don_phuc_khao` WHERE sbd='$id_hoc_sinh' AND id_phong_thi='$id_phong_thi'";
        $result = mysqli_query($conn, $sql);
        $diem = mysqli_fetch_assoc($result)['diem_hien_tai'];
        return $diem;
    }


    function getDiemSauPk($id_hoc_sinh, $id_phong_thi)
	{
		GLOBAL $conn;
		$sql = "SELECT diem_hien_tai FROM `don_phuc_khao` WHERE sbd='$id_hoc_sinh' AND id_phong_thi='$id_phong_thi'";
        $result = mysqli_query($conn, $sql);
        $diem = mysqli_fetch_assoc($result)['diem_hien_tai'];
        return $diem;
    }
    function getTrangThaiPk($id_hoc_sinh, $id_phong_thi)
	{
		GLOBAL $conn;
		$sql = "SELECT trang_thai FROM `don_phuc_khao` WHERE sbd='$id_hoc_sinh' AND id_phong_thi='$id_phong_thi'";
        $result = mysqli_query($conn, $sql);
        $diem = mysqli_fetch_assoc($result)['trang_thai'];
        return ($diem==1) ? true : false;
    }

    function getSLPhucKhao($mon)
    {
    	GLOBAL $conn;
		$sql = "SELECT count(*) AS 'sl' FROM `don_phuc_khao` WHERE id_mon ='$mon'";
        $result = mysqli_query($conn, $sql);
        $diem = mysqli_fetch_assoc($result)['sl'];
        return $diem;
    }

    function displayTrangThaiPK($thiSinh)
    {
    	$trangThai = getTrangThaiPk($thiSinh['id_hoc_sinh'], $thiSinh['id_phong_thi']);
    	return [
    		true => '<span class="mr-2"><span class="badge-dot badge-success"></span>Hoàn thành</span>',
    		false => '<span class="mr-2"><span class="badge-dot badge-danger"></span>Chưa hoàn thành</span>'
    	][$trangThai];
    }

    function getSLPhucKhaoDangCho($mon)
    {
    	GLOBAL $conn;
		$sql = "SELECT count(*) AS 'sl' FROM `don_phuc_khao` WHERE id_mon ='$mon' AND trang_thai=0";
        $result = mysqli_query($conn, $sql);
        $diem = mysqli_fetch_assoc($result)['sl'];
        return $diem;
    }

    function getAllSLPhucKhaoDangCho()
    {
    	GLOBAL $conn;
		$sql = "SELECT count(*) AS 'sl' FROM `don_phuc_khao` WHERE trang_thai=0";
        $result = mysqli_query($conn, $sql);
        $diem = mysqli_fetch_assoc($result)['sl'];
        return $diem;
    }
 ?>