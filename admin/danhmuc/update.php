<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="container my-4">
  <!-- Title -->
  <div class="mb-3 text-center">
    <h1 class="text-uppercase fw-bold">Cập Nhật Loại Hàng Hóa</h1>
  </div>
  
  <!-- Form Content -->
  <div class="card shadow">
    <div class="card-body">
      <form action="index.php?act=updatedm" method="post" onsubmit="return confirm('Bạn có muốn cập nhật loại hàng?')">
        <!-- Mã loại -->
        <div class="mb-3">
          <label for="maloai" class="form-label fw-semibold">Mã loại</label>
          <input type="text" id="maloai" name="maloai" class="form-control" value="<?=$id?>" disabled>
        </div>
        
        <!-- Tên loại -->
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Tên loại</label>
          <input type="text"  name="tenloai" class="form-control" value="<?php if((isset($name))&&($name!="")) echo $name?>">
        </div>
        <!-- Buttons -->
        <div class="d-flex gap-4">
            <input type="hidden" name="id" value="<?php if((isset($id))&&($id!="")) echo $id?>">
          <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary">
          <input type="reset" class="btn btn-secondary" value="Nhập lại">
          <a href="index.php?act=listdm" class="btn btn-info text-white">Danh Sách Hàng Hóa</a>
        </div>
        
        <!-- Thông báo -->
        <?php if (isset($thongbao) && $thongbao != "") echo '<div class="mt-3 alert alert-success">'.$thongbao.'</div>'; ?>
      </form>
    </div>
  </div>
</div>