<?php
if (isset($thongbaoupdate)) {
  echo '<div class="mt-3 alert alert-success">' . $thongbaoupdate . '</div>';
}
?>
<div class="container my-4">
  <!-- Title -->
  <div class="mb-3 text-center">
    <h1 class="text-uppercase fw-bold">Danh Sách Loại Hàng</h1>
  </div>

  <!-- Table Content -->
  <div class="card shadow">
    <div class="card-body">
    <div class="mb-3">
      <label for="search" class="form-label">Danh sách</label>
      <form action="index.php?act=listsp" method="post" class="row g-3">
          <!-- Input tìm kiếm -->
          <div class="col-md-6">
              <input type="text" name="kyw" class="form-control" placeholder="Nhập giá trị cần tìm ...">
          </div>
          <!-- Dropdown danh mục -->
          <div class="col-md-4">
              <select name="iddm" class="form-select">
                  <option value="" selected>--Tất cả--</option>
                  <?php
                  foreach ($listdanhmuc as $danhmuc) {
                      extract($danhmuc);
                      echo '<option value="' . $id . '">' . $name . '</option>';
                  }
                  ?>
              </select>
          </div>
          <!-- Nút tìm kiếm -->
          <div class="col-md-2">
              <input type="submit" name="listok" value="Tìm" class="btn btn-primary w-100">
          </div>
      </form>
    </div>


      <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th></th>
            <th>Mã Loại</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Lượt xem</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php

          foreach ($listsanpham as $sanpham) {
            extract($sanpham);
            $suasp = "index.php?act=suasp&id=" . $id;
            $hiensp = "index.php?act=hiensp&id=" . $id;
            if($kiemtrasp==1){
              echo '<tr>
                      <td><input type="checkbox" name="selected[]" value="' . $id . '"></td>
                      <td>' . $id . '</td>
                      <td>' . $name . '</td>
                      <td><img class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;" src="../uploads/' . $img . '"></img></td>
                      <td>' . $price . '</td>
                      <td>' . $luotxem . '</td>
                      <td>
                        <a href="' . $suasp . '" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="' . $hiensp . '" class="btn btn-danger btn-sm">Hiện sản phẩm</a>
                      </td>
                    </tr>';
            }

          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Action Buttons -->
  <div class="mt-3 text-center">
    <button class="btn btn-primary btn-sm" onclick="selectAll(true)">Chọn tất cả</button>
    <button class="btn btn-secondary btn-sm" onclick="selectAll(false)">Bỏ chọn tất cả</button>
    <button class="btn btn-danger btn-sm">Ẩn các mục đã chọn</button>
    <a href="index.php?act=addsp" class="btn btn-success btn-sm">Nhập thêm</a>
    <a href="index.php?act=listsp" class="btn btn-success btn-sm">Danh sách loại hàng</a>
  </div>
</div>

<script>
  // JavaScript để chọn hoặc bỏ chọn tất cả checkbox
  function selectAll(select) {
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="selected[]"]');
    checkboxes.forEach(cb => cb.checked = select);
  }
</script>