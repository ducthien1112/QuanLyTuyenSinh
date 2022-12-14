<?php 
	function getListTS($mon_filter='')
    {
        GLOBAL $conn;
        $sql = "SELECT * FROM ho_so INNER JOIN mon ON ho_so.mon_thi_chuyen=mon.id_mon";
        if($mon_filter != ''){
            $sql .= " WHERE mon.id_mon='$mon_filter'";
        }
        $result = mysqli_query($conn, $sql);
        $listTS = [];
        while ($row = mysqli_fetch_array($result)){
            $listTS[] = $row;
        }   
        return $listTS;
    }


    function getTenMon($id_mon)
    {
        GLOBAL $conn;
        $tenMon = '';
        $sql = "SELECT * FROM mon WHERE id_mon = '$id_mon'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        	$tenMon = mysqli_fetch_array($result)['ten_mon'];
        }
        return $tenMon;
    }

    function getListMonChuyen($value='')
    {
    	GLOBAL $conn;
    	$sql = "SELECT * FROM mon WHERE loai_mon = 'chuyen'";
        $result = mysqli_query($conn, $sql);
        $stt = 0;
        $ListMonChuyen = [];
        while ($row = mysqli_fetch_array($result)) {
            $ListMonChuyen[] = $row;
        }
        return $ListMonChuyen;
    }


 ?>