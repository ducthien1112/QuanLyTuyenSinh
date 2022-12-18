<?php
	include_once "cong_dk_functions.php";
	include_once 'danh_sach_tsdk_functions.php'; 
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

	        // Lấy ra danh sách phòng thi toán chung
	        $listPhongToan = getlistPhongToan();
	    
	        // Lấy ra danh sách phòng thi toán chung
	        $listPhongVan = getlistPhongVan();;
	        


	        // Sắp xếp phòng thi chung
	        $listHoSo = sapXepPhongThiChung($listHoSo, $listPhongToan, $listPhongVan, $so_luong_mot_phong);

	        // Lấy ra danh sách phong thi cho tất cả môn chuyên
	        $listPhongThiChuyen = getListPhongThiChuyen();

	        
	        // Sắp xếp phòng thi chung
	        $listHoSo = sapXepPhongThiChuyen($listHoSo, $listPhongThiChuyen, $so_luong_mot_phong);

	        
	        // Cất dữ liệu thông tin danh sách phòng thi 
	        insertSapXepDanhSachPhongThi($listHoSo);
	        $trangThaiSapXepPhong = true;
	        $msg_SapXep = true;
	    }
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
		$sql = "SELECT * FROM ho_so WHERE thanh_toan_le_phi = 1 ORDER BY mon_thi_chuyen ASC";
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
            $listHoSo[$key]['id_phong_thi_toan'] = $listPhongToan[0];        
            $listHoSo[$key]['id_phong_thi_van'] = $listPhongVan[0];        
            $count_thi_sinh_1Phong++;
            if($count_thi_sinh_1Phong > $so_luong_mot_phong){
                $count_thi_sinh_1Phong = 0;
                array_shift($listPhongToan);
                array_shift($listPhongVan);
            }
        }
        return $listHoSo;
	}

	function sapXepPhongThiChuyen($listHoSo, $listPhongThiChuyen, $so_luong_mot_phong)
	{
		$count_thi_sinh_1Phong = 1;
        foreach ($listHoSo as $key => $hoSo) {
            $id_mon_chuyen = $hoSo['mon_thi_chuyen'];
            $listHoSo[$key]['id_phong_thi_chuyen'] = $listPhongThiChuyen[$id_mon_chuyen][0];
            $count_thi_sinh_1Phong++;
            if($count_thi_sinh_1Phong > $so_luong_mot_phong){
                $count_thi_sinh_1Phong = 0;
                array_shift($listPhongThiChuyen[$id_mon_chuyen]);
            }
        }
        return $listHoSo;
	}

	function insertSapXepDanhSachPhongThi($listHoSo){
        $sbd = 0;
        GLOBAL $conn;
        foreach ($listHoSo as $key => $hoSo) {
            ++$sbd;
            $sbd_db = str_pad($sbd, 4, '0', STR_PAD_LEFT);
            
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
                'ten_phong' => $row['ten_phong']
            ];
        }
        return $listPhongThi;
	}

 ?>