<?php 
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

	function sapXepDanhSachPhongThi($listHoSo){
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

 ?>