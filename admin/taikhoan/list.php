<div class="container">
  <div class="row">
    <!-- Title -->
    <div class="col-12 text-center py-3 bg-primary text-white mb-4">
      <h1>DANH SÁCH TÀI KHOẢN</h1>
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
              <th>MÃ TÀI KHOẢN</th>
              <th>TÊN ĐĂNG NHẬP</th>
              <th>MẬT KHẨU</th>
              <th>EMAIL</th>
              <th>ĐỊA CHỈ</th>
              <th>SỐ ĐIỆN THOẠI</th>
              <th>VAI TRÒ</th>
              <th>THAO TÁC</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach($listtaikhoan as $taikhoan){ 
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                if ($role == 1) {
                  $role = "Admin";
              } elseif ($role == 0) {
                  $role = "Người dùng";
              }
              
                if($kiemtratk==0){
                    echo '<tr>
                        <td><input type="checkbox" name="checkbox_'.$id.'"></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td>
                          <a href="'.$suatk.'" class="btn btn-sm btn-warning">Sửa</a> 
                          <a href="'.$xoatk.'" class="btn btn-sm btn-danger">Ẩn</a>
                        </td>
                      </tr>';
                }
                
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
