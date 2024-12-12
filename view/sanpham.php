<div class="row mb">
        <div class="boxtrai mr ">
            <?php if(isset($kyw) && $kyw != ''){
                echo '<h1>Kết quả tìm kiếm từ khóa : '.$kyw.'</h1>';
            }else if(isset($iddm) && $iddm >0){
                echo '<h1 >Danh mục:' .$tendm.'</h1>';
            }else{
                echo '<h1 >Chi tiết sản phẩm:' .$tendm.'</h1>';
            }
            ?>
          
          <div class="row">
            <?php
            foreach($dssp as $sp){
              extract($sp);
              $linksp="index.php?act=sanphamct&idsp=".$id;
              echo '<a href="'.$linksp.'"><div class="boxsp mr">
                      <div class="row img">
                        <img src="'.$img_path.$img.'" alt="ảnh sp" />
                      </div>
                      <p>Giá sản phẩm :'.$price.' VNĐ</p>
                      <a href="'.$linksp.'">Tên sản phẩm:'.$name.'</a>
                    </div>
                    </a>';
            } 
            ?>
          </div>

          
        </div>
        
        <?php 
          include "boxright.php";
        ?>
</div>