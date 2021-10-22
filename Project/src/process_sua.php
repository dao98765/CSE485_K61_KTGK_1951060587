<?php

    $id= $_GET['id'];//id trong get này lấy giông id sau dấu ? dong11
    $License_no= $_POST['License_no'];
    $Model= $_POST['Model'];
    $Year= $_POST['Year'];
    $Ctype= $_POST['Ctype'];
    $Drate= $_POST['Drate'];
    $Wrate= $_POST['Wrate'];
    $Status= $_POST['Status'];
    
    
        
    include './config.php';
    $sql2 = "UPDATE `cars` SET  `license_no`='$License_no',`model`='$Model', 
    `year`='$Year',`ctype`=' $Ctype',`drate`='$Drate',`wrate`='$Wrate',`status`='$Status'
    WHERE vehicle_id = '$id'";
    echo $sql2;
    
    $result_update = mysqli_query($conn, $sql2);
    if($result_update) 
    {
        header("Location:index.php");
    }
    else {
        
        header("Location:error.php");
    }
    
?>