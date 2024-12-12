<div class="container">
  <div class="row">
    <!-- Title -->
    <div class="col-12 text-center py-3 bg-primary text-white mb-4">
      <h1>DANH SÁCH Bình Luận</h1>
    </div>
  </div>

  <div class="row">
    <!-- Table -->
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered text-center">
          <thead class="table-primary">
            <tr>
              <th><input type="checkbox" id="checkAll"></th>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
              <th>Ngày đặt hàng</th>
              <th>Tổng tiền</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach($listdonhang as $donhang){
                extract($donhang);
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '<tr>
                        <td><input type="checkbox" id="checkAll"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$ngaydathang.'</td>
                        <td>'.$tongdonhang.'VNĐ</td>
                      </tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <!-- Actions -->
    <div class="col-12 text-center">
      <button class="btn btn-primary btn-sm">Chọn tất cả</button>
      <button class="btn btn-secondary btn-sm">Bỏ chọn tất cả</button>
      <button class="btn btn-danger btn-sm">Xóa các mục đã chọn</button>
      <a href="index.php?act=adddm" class="btn btn-success btn-sm">Nhập thêm</a>
    </div>
  </div>
</div>
