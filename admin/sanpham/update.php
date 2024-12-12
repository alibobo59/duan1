<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath ="../uploads/".$img;
    $hinh = "<img src='".$hinhpath."' class='d-block img-fluid rounded shadow' style='width: 200px; height: 200px; object-fit: cover;'>";
?>
<div class="container my-4">
  <!-- Title -->
  <div class="mb-3 text-center">
    <h1 class="text-uppercase fw-bold">Cập Nhật Loại Hàng Hóa</h1>
  </div>
  
  <!-- Form Content -->
  <div class="card shadow">
    <div class="card-body">
      
      <form action="index.php?act=updatesp" enctype="multipart/form-data" method="post" onsubmit="return confirm('Bạn có muốn cập nhật loại hàng?')">
      <select name="iddm" id="iddm" class="form-select">
        <option value="0" selected>--Tất cả--</option>
        <?php
        foreach ($listdanhmuc as $danhmuc) {
          extract($danhmuc);
          $s = ($iddm == $id) ? "selected" : "";
          echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
      }
        ?>
      </select>
      <!-- Mã loại -->
        <div class="mb-3">
          <label for="maloai" class="form-label fw-semibold">Mã loại</label>
          <input type="text" id="maloai" name="maloai" class="form-control" value="<?=$sanpham['id']?>" disabled>
        </div>
        
        <!-- Tên loại -->
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Tên sản phẩm</label>
          <input type="text"  name="tensp" class="form-control" value="<?= $sanpham['name'] ?>" >
        </div>
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Giá sản phẩm</label>
          <input type="text"  name="giasp" class="form-control" value="<?php if((isset($price))&&($price!="")) echo $price?>">
        </div>
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold d-block">Hình ảnh</label>
          <input type="file" name="hinh">
          <?= $hinh ?>
        </div>
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Mô tả</label>
          <textarea type="text"  name="mota" class="form-control"> <?php if((isset($mota))&&($mota!="")) echo $mota?> </textarea>
        </div>
        <?php 
          $id = $sanpham['id'];
          $name = $sanpham['name'];
        ?>
        <!-- Buttons -->
        <div class="d-flex gap-4">
          <input type="text" name="id" hidden value="<?=$id?>"> 
          <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary">
          <input type="reset" class="btn btn-secondary" value="Nhập lại">
          <a href="index.php?act=listsp" class="btn btn-info text-white">Danh Sách Hàng Hóa</a>
        </div>
        
        <!-- Thông báo -->
        <?php if (isset($thongbao) && $thongbao != "") echo '<div class="mt-3 alert alert-success">'.$thongbao.'</div>'; ?>
      </form>
    </div>
  </div>
</div>