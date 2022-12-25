<?php 


	function getListTSTrungTuyen($mon, $chi_tieu){
		GLOBAL $conn;
		$sql_select_id_hoc_sinh_by_mon = "SELECT id_hoc_sinh FROM hoc_sinh INNER JOIN ho_so ON hoc_sinh.id_ho_so=ho_so.id_ho_so WHERE ho_so.mon_thi_chuyen='$mon'";
		$sql = "SELECT sbd, (diem_toan+diem_van+(diem_chuyen*2)) AS 'TongDiem' FROM diem WHERE sbd IN ($sql_select_id_hoc_sinh_by_mon) ORDER BY `TongDiem` ASC LIMIT $chi_tieu";
		$result = mysqli_query($conn, $sql);
		$listTS = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$listTS[$row['sbd']]['tong_diem'] = $row['TongDiem'];
		}
		return $listTS;
	}

	function getinfoListTSTrungTuyen($listTS){
		GLOBAL $conn;
		if($listTS==[]) return [];
		$listSBD = implode(',', array_keys($listTS));
		$sql = "SELECT * FROM hoc_sinh WHERE id_hoc_sinh IN ($listSBD)";
		$result = mysqli_query($conn, $sql);
		$listTSTrungTuyen = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$sbd = $row['id_hoc_sinh'];
			$listTSTrungTuyen[$sbd]['tong_diem'] = $listTS[$sbd]['tong_diem'];
			$listTSTrungTuyen[$sbd]['ten'] = $row['ten'];
			$listTSTrungTuyen[$sbd]['ngay_sinh'] = $row['ngay_sinh'];
			$listTSTrungTuyen[$sbd]['gioi_tinh'] = $row['gioi_tinh'];
			$listTSTrungTuyen[$sbd]['phone'] = $row['phone'];
		}
		return $listTSTrungTuyen;
	}




 ?>