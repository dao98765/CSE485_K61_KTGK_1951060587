<?php
    include 'config.php';
    $ID = $_GET['id'];
    $sql = "DELETE from cars where vehicle_id= '$ID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }
    mysqli_close($conn);
?>