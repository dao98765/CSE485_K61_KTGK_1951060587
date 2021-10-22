<?php
    include 'same/header.php';
   
?>
<a href="index.php" class="btn btn-secondary mb-3"><i class="fas fa-undo-alt"></i> Quay lại</a>
<main class="container mt-5">
    <h2 class="mb-3 text-center">Thông tin chi tiết </h2>
    
    <table class="table table-dark mt-3">
        <thead>
            <tr>
            <th scope="col">Mã phương tiện </th>
            <th scope="col">Biển số xe</th>
            <th scope="col">Model</th>
            <th scope="col">Năm sản xuất</th>
            <th scope="col">Kiểu oto</th>
            <th scope="col">Giá cho thuê theo ngày</th>
            <th scope="col">Giá cho thuê theo tuần</th>
            <th scope="col">Trạng thái </th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                $Id = $_GET['id'];
                $sql = "SELECT * FROM cars WHERE vehicle_id = '$Id'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['vehicle_id'].'</th>';// dấu '. .' là để nối chuỗi 
                        echo '<td>'.$row['license_no'].'</td>';
                        echo '<td>'.$row['model'].'</td>';
                        echo '<td>'.$row['year'].'</td>';
                        echo '<td>'.$row['ctype'].'</td>';
                        echo '<td>'.$row['drate'].'</td>';
                        echo '<td>'.$row['wrate'].'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';
                    }
                }
                ?>
        </tbody>
    </table>

</main>