<?php
include 'same/header.php';
include 'config.php';
?>
<a href="index.php" class="btn btn-secondary mb-3"><i class="fas fa-undo-alt"></i> Quay lại</a>
<main class= "container mt-5 ">
    <h2 class="mb-3 text-center">Thêm thông tin </h2>
    
    <form action="process_them.php" method="post">
        
    
        <div class="mb-3 row">
            <label for="license_no" class="col-sm-2 col-form-label">Biển số xe </label>
            <div class="col-sm-5">
                <input type="text" class="form-control"  name="License_no">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="model" class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Model">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="year" class="col-sm-2 col-form-label">Năm sản xuất</label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Year">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ctype" class="col-sm-2 col-form-label">Kiểu ô tô </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Ctype">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="drate" class="col-sm-2 col-form-label">Giá cho thuê theo ngày </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Drate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wrate" class="col-sm-2 col-form-label">Giá cho thuê theo tuần </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Wrate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Trạng thái </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Status">
            </div>
        </div>
       
        <div class="form-group row">
            <label for="btn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Lưu lại</button>
            </div>
        </div>
        

    </form>
</main>
<?php
include 'same/footer.php';
?>