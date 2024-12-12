<div class="container my-4">
  <!-- Title -->
  <div class="mb-3 text-center">
    <h1 class="text-uppercase fw-bold">Thêm Mới Loại Sản Phẩm</h1>
  </div>
  
  <!-- Form Content -->
  <div class="card shadow">
    <div class="card-body">
      <form action="index.php?act=addsp" enctype="multipart/form-data" method="post" onsubmit="return confirm('Bạn có muốn thêm mới loại hàng?')">
        <!-- Mã loại -->
        <div class="mb-3">
          <label for="maloai" class="form-label fw-semibold">Danh Mục Mã Sản Phẩm </label>
          <div class="mb-3">
          <select name="iddm" class="form-select form-select-lg">
            <option value="">--Chọn--</option>
            <?php
              foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
                
              }
            ?>
          </select>
          </div>
        </div>
        <!-- Tên loại -->
        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold" >Tên Sản Phẩm</label>
          <input type="text"  name="tensp" class="form-control" placeholder="Nhập tên sản phẩm">
        </div>

        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Giá Sản Phẩm</label>
          <input type="number"  name="giasp" class="form-control" placeholder="Nhập giá sản phẩm">
        </div>

        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Hình ảnh</label>
          <input type="file"  name="hinh" class="form-control">
        </div>

        <div class="mb-3">
          <label for="tenloai" class="form-label fw-semibold">Mô tả sản phẩm</label>
          <textarea  name="mota" cols="30" rows="10" class="form-control" placeholder="Nhập mô tả sản phẩm"></textarea>
        </div>
        <!-- Buttons -->
        <div class="d-flex gap-4">
          <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">
          <input type="reset" class="btn btn-secondary" value="Nhập lại">
          <a href="index.php?act=listsp" class="btn btn-info text-white">Danh Sách Hàng Hóa</a>
        </div>
        
        <!-- Thông báo -->
        <?php if (isset($thongbao) && $thongbao != "") echo '<div class="mt-3 alert alert-success">'.$thongbao.'</div>'; ?>
      </form>
    </div>
  </div>
</div>