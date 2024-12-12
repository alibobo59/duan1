<div class="row mb">
        <div class="boxtrai mr">

          <!-- slide show -->
          <div class="row">
              <div class="banner mb">
                  <!-- Slideshow container -->
                  <div class="slideshow-container">

                  <!-- Full-width images with number and caption text -->
                  <div class="mySlides fade">
                  <div class="numbertext">1 / 4</div>
                  <img src="view/images/banner/banner1.webp" style="width:100%">
                  <div class="text"></div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">2 / 4</div>
                  <img src="view/images/banner/banner2.webp" style="width:100%">
                  <div class="text"></div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">3 / 4</div>
                  <img src="view/images/banner/banner3.webp" style="width:100%">
                  <div class="text"></div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">4 / 4</div>
                  <img src="view/images/banner/banner4.webp" style="width:100%">
                  <div class="text"></div>
                  </div>

                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>
                  <br>

                  <!-- The dots/circles -->
                  <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span>
                  </div>
              </div>
          </div>
          <!-- end slide show -->

          <div class="row">
            <div class="mb">
              <img src="uploads/bookshelf-with-books-biography-adventure-novel-poem-fantasy-love-story-detective-art-romance-banner-for-library-book-store-genre-of-literature-illustration-in-flat-style-vector.jpg" width="49%" height="200px" alt="ảnh sản nổi bật" />
              <img src="uploads/bookshelf-with-books-biography-adventure-novel-poem-fantasy-love-story-detective-art-romance-banner-for-library-book-store-genre-of-literature-illustration-in-flat-style-vector.jpg" width="49%" height="200px" alt="ảnh sản nổi bật" />
            
            </div>
            
          </div>
          <h1 >Sản phẩm mới ra mắt</h1>
          <div class="row">
            <?php
            foreach($spnew as $sp){
              extract($sp);
              $linksp="index.php?act=sanphamct&idsp=".$id;
              echo '  <a href="'.$linksp.'">
                      <div class="boxsp mr">
                      <div class="row img">
                        <img src="'.$img_path.$img.'" alt="ảnh sp" />
                      </div>
                      <p>Giá sản phẩm :'.$price.' VNĐ</p>
                      <a href="'.$linksp.'">Tên sản phẩm:'.$name.'</a>
                    <form action="index.php?act=addtocart" method="post">
                      <input type="hidden" name="id" value="'.$id.'">
                      <input type="hidden" name="name" value="'.$name.'">
                      <input type="hidden" name="img" value="'.$img.'">
                      <input type="hidden" name="price" value="'.$price.'">
                      <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                      </div>
                    </a>';
            } 
            ?>
          </div>
          <br>
          <h1>Sản phẩm yêu thích</h1>
          <div class="row">
            <?php
            foreach($dstop as $ds){
              extract($ds);
              $linksp="index.php?act=sanphamct&idsp=".$id;
              echo '  
                      <div class="boxsp mr">
                      <a href="'.$linksp.'"><div class="row img">
                        <img src="'.$img_path.$img.'" alt="ảnh sp" />
                      </div>
                      <p>Giá sản phẩm :'.$price.' VNĐ</p></a>
                      <a href="'.$linksp.'">Tên sản phẩm:'.$name.'</a>
                    <p>Lượt xem: '.$luotxem.'</p>
                    <form action="index.php?act=addtocart" method="post">
                      <input type="hidden" name="id" value="'.$id.'">
                      <input type="hidden" name="name" value="'.$name.'">
                      <input type="hidden" name="img" value="'.$img.'">
                      <input type="hidden" name="price" value="'.$price.'">
                      <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                    </div>
                  
                    ';
            } 
            ?>
          </div>
          
      </div>
        <?php 
          include "boxright.php";
        ?>
      </div>