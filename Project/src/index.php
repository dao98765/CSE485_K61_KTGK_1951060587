<?php
include './same/header.php';
?>
<main class="container mt-5">
    <h1 class= ' text-center text-dark mt-5 '>QUẢN LÍ XE</h1>
    <a href="them.php" class= "btn btn-dark bg-danger text-white ">Thêm Thông tin <i class="fa-solid fa-user-plus"></i></a>
    <table class="table table-dark mt-3">
        <thead>
            <tr>
            <th scope="col">Mã phương tiện </th>
            <th scope="col">Biển số xe</th>
            <th scope="col">Model</th>
            <th scope="col">Chi tiết</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                $sql = 'SELECT * FROM cars';
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['vehicle_id'].'</th>';// dấu '. .' là để nối chuỗi 
                        echo '<td>'.$row['license_no'].'</td>';
                        echo '<td>'.$row['model'].'</td>';
                        echo '<td><a href="chitiet.php?id='.$row['vehicle_id'].'"><i class="fa-solid fa-circle-info"></i></a></td>';
                        echo '<td><a href="sua.php?id='.$row['vehicle_id'].'"><i class="fas fa-user-edit"></i></a></td>';
                        echo '<td><a href="xoa.php?id='.$row['vehicle_id'].'"><i class="fas fa-trash-alt"></i></a></td>';
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>

</main>