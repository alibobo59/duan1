<div class="row mb">
        <div class="boxtrai mr ">
          <div class="row">
            <div class="boxtitle">Chi tiết sản phẩm : <?php extract($onesp);echo $name?></div>
            <div class="row boxcontent">
              <?php 
                extract($onesp);
                $img=$img_path.$img;
                $price = number_format($price, 0, ',', '.') . ' VND';
                echo '<div class="row mb mid ">
                        <img style="width: 200px; height: 200px;" src="'.$img.'" >
                      </div>';
                echo    '<ul>
                            <li>Mã sản phẩm: '.$id.'</li>
                            <li>Tên sản phẩm: '.$name.'</li>
                            <li>Giá tiền: '.$price.'</li>
                        </ul>';
                echo '<h3>Mô tả sản phẩm</h3>
                    <p class="mt20">'.$mota.'</p>';
              ?>
            </div>
          </div>

          <div class="row">
            <div class="boxtitle">Bình luận</div>
            <div class="row">
    <!-- Table -->
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered text-center">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Nội dung</th>
              <th>User</th>
              <th>Ngày Bình luận</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach($listbinhluan as $binhluan){
                extract($binhluan);
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$ngaybinhluan.'</td>
                      </tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
      <div>
      <form action="index.php?act=addbl&idsp=<?php echo $_GET['idsp']; ?>" method="post">

          <p>Thêm bình luận</p>
          <input type="text" name="binhluan" placeholder="Nhập bình luận">
          <input type="submit" value="Gửi bình luận" name="guibinhluan">
        </form>
      </div>
    </div>
  </div>
          </div>

          <div class="row">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">
            <?php
                foreach($sp_cung_loai as $sp_cungloai){
                    extract($sp_cungloai);
                    $linksp="index.php?act=sanphamct&&idsp=".$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
            ?>
            </div>
          </div>
        </div>
        
        <?php 
          include "boxright.php";
        ?>
</div>