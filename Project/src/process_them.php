<?php
    include 'config.php';
    $License_no= $_POST['License_no'];
    $Model= $_POST['Model'];
    $Year= $_POST['Year'];
    $Ctype= $_POST['Ctype'];
    $Drate= $_POST['Drate'];
    $Wrate= $_POST['Wrate'];
    $Status= $_POST['Status'];
    //Bước 2: 
    $sql = "INSERT INTO `cars`(`license_no`, `model`, `year`, `ctype`,`drate`, `wrate`, `status`) 
    VALUES ('$License_no','$Model','$Year','$Ctype','$Drate','$Wrate','$Status')";
    
    $result = mysqli_query($conn, $sql);
    //Bước 3 
    if($result >0 ){
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>