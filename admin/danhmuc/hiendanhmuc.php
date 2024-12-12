<div class="container my-4">
  <!-- Title -->
  <div class="mb-3 text-center">
    <h1 class="text-uppercase fw-bold">Danh Sách Loại Hàng Đã Ẩn</h1>
  </div>

  <!-- Table Content -->
  <div class="card shadow">
    <div class="card-body">
      <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th></th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($listdanhmuc as $danhmuc) { 
              extract($danhmuc);
              $suadm = "index.php?act=suadm&id=" . $id;
              $hiendm = "index.php?act=hiendm&id=" . $id;
              if( $kiemtra == 0 ){
                echo '<tr>
                      <td><input type="checkbox" name="selected[]" value="' . $id . '"></td>
                      <td>' . $id . '</td>
                      <td>' . $name . '</td>
                      <td>
                        <a href="' . $suadm . '" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="' . $hiendm . '" class="btn btn-danger btn-sm">Hiện danh mục</a>
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
    <a href="index.php?act=adddm" class="btn btn-success btn-sm">Nhập thêm</a>
    <a href="index.php?act=listdm" class="btn btn-success btn-sm">Danh sách danh mục</a>
  </div>
</div>

<script>
  // JavaScript để chọn hoặc bỏ chọn tất cả checkbox
  function selectAll(select) {
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="selected[]"]');
    checkboxes.forEach(cb => cb.checked = select);
  }
</script>
