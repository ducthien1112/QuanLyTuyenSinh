<?php 


	function getListTSTrungTuyen($mon, $chi_tieu){
		GLOBAL $conn;
		$sql_select_id_hoc_sinh_by_mon = "SELECT id_hoc_sinh FROM hoc_sinh INNER JOIN ho_so ON hoc_sinh.id_ho_so=ho_so.id_ho_so WHERE ho_so.mon_thi_chuyen='$mon'";
		$sql = "SELECT sbd, (diem_toan+diem_van+(diem_chuyen*2)) AS 'TongDiem' FROM diem WHERE sbd IN ($sql_select_id_hoc_sinh_by_mon) ORDER BY `TongDiem` DESC LIMIT $chi_tieu";
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
			$listTSTrungTuyen[] = [
				'tong_diem' => round($listTS[$sbd]['tong_diem'], 2),
				'sbd' => $row['id_hoc_sinh'],
				'ten' => $row['ten'],
				'ngay_sinh' => $row['ngay_sinh'],
				'gioi_tinh' => $row['gioi_tinh'],
				'phone' => $row['phone']
			];
		}
		usort($listTSTrungTuyen, function($a, $b){
			return $a['tong_diem'] < $b['tong_diem'];
		});
		return $listTSTrungTuyen;
	}




 ?>