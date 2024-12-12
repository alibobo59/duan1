<div class="boxphai">
        <div class="row mb">
          <div class="boxtitle">TÀI KHOẢN</div>
          <?php
            if(isset($_SESSION['user'])){ 
              extract($_SESSION['user']);
            ?>
              <div class="row mb10">
                Xin chào,<?= $user?><br />
              </div>
              <div class="row mb10">
                <li>
                  <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                </li>
                <li>
                  <a href="index.php?act=edit_taikhoan">Cập nhật thông tin?</a>
                </li>
                <?php if($role==1){ ?>
                    <li>
                      <a href="admin/index.php">Đăng nhập admin?</a>
                    </li>
                <?php }
                ?>
                
                <li>
                  <a href="index.php?act=thoat">Thoát!</a>
                </li>
              </div>
            <?php }else{ ?>
                <div class="boxcontent formtaikhoan">
                <form action="index.php?act=dangnhap" method="post">
                  <div class="row mb10">
                    Tên đăng nhập<br />
    
                    <input type="text" name="user" id="" />
                  </div>
    
                  <div class="row mb10">
                    Mật khẩu<br />
    
                    <input type="password" name="pass" id="" />
                  </div>
    
                  <div class="row mb10">
                    <input type="checkbox" name="" /> Ghi nhớ tài khoản?
                  </div>
    
                  <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap" />
                  </div>
                </form>
    
                <li>
                  <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
    
                <li>
                  <a href="index.php?act=dangky">Đăng ký thành viên</a>
                </li>
              </div>
            </div>
            <?php }       
          ?>
          
        <div class="row mb">
          <div class="boxtitle">DANH MỤC SẢN PHẨM</div>

          <div class="boxcontentlist menudoc">
            <ul>
              <?php 
                foreach($dsdm as $dm){
                  extract($dm);
                  $linkdm="index.php?act=sanpham&iddm=".$id;
                  echo '<li>
                          <a href="'.$linkdm.'">'.$name.'</a>
                        </li>';
                }
              ?>
              

              
            </ul>
          </div>

          <div class="search-box-container">
            <div class="search-box">
              <form action="index.php?act=sanpham" method="post">
                <input type="text" name="kyw" class="search-input" placeholder="Nhập từ khóa tìm kiếm..." />
                <input type="submit" value="Tìm kiếm" name="timkiem" class="search-button" />
              </form>
            </div>
          </div>

          <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <?php 
              foreach($dstop as $ds){
                extract($ds);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                echo '
                      <div class="row boxcontent">
                        <div class="row mb10 top10">
                          <img src="'.$img_path.$img.'" alt="img" />

                          <a href="'.$linksp.'">'.$name.'</a>
                        </div>
                      </div>';
              }
            ?>
            
          </div>
</div>