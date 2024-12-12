<div class="container my-4">
  <!-- Title -->
  <div class="mb-3 text-center">
    <h1 class="text-uppercase fw-bold">Thêm Mới Loại Hàng Hóa</h1>
  </div>
  
  <!-- Form Content -->
  <div class="card shadow">
    <div class="card-body">
      <form action="index.php?act=adddm" method="post" onsubmit="return confirm('Bạn có muốn thêm mới loại hàng?')">
        <!-- Mã loại -->
        <div class="mb-3">
          <label for="maloai" class="form-label fw-semibold">Mã loại</label>
          <input type="text" id="maloai" name="maloai" class="form-control" disabled>
        </div>
        
        <!-- Tên loại -->
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Tên loại</label>
          <input type="text"  name="tenloai" class="form-control">
        </div>
        <!-- Buttons -->
        <div class="d-flex gap-4">
          <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">
          <input type="reset" class="btn btn-secondary" value="Nhập lại">
          <a href="index.php?act=listdm" class="btn btn-info text-white">Danh Sách Hàng Hóa</a>
        </div>
        
        <!-- Thông báo -->
        <?php if (isset($thongbao) && $thongbao != "") echo '<div class="mt-3 alert alert-success">'.$thongbao.'</div>'; ?>
      </form>
    </div>
  </div>
</div>