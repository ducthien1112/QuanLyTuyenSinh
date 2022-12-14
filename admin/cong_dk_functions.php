<?php 
    function getCongDK()
    {
        GLOBAL $conn;
        $sql = "SELECT thoi_gian FROM `thoi_gian` WHERE id = 1 OR id = 2 ORDER BY id";
        $result = mysqli_query($conn, $sql);
        $congDK['start_time'] = mysqli_fetch_array($result)['thoi_gian'];
        $congDK['end_time'] = mysqli_fetch_array($result)['thoi_gian'];
        return $congDK;
    }


    function updateCongDK($start_time, $end_time)
    {
        GLOBAL $conn;
        $sql = "UPDATE `thoi_gian` SET `thoi_gian`= (
        case when id = '1' then '$start_time'
        when id = '2' then '$end_time'
        end ) 
        WHERE `id`= 1 || `id`= 2";
        return mysqli_query($conn, $sql);
    }

 ?>