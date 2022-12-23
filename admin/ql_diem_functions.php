<?php 
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