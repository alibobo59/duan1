<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự án 1</title>
    <link rel="stylesheet" href="dist/css/css.css" />
    </head>
  <body>
    
    <div class="boxcenter">
      <div class="thongtin">
        <p>Phone: 1900 9999</p>
        <p>Email: rbook@gmail.com</p>
        <p>Address: 13 Trịnh Văn Bô, Nam Từ Liêm,Hà Nội</p>
      </div>
      <div class="header">
        <div><a href="index.php"><img src="view/images/logo/logo.jpeg" alt=""></a></div>
        <div class="search-container">
          <div class="search-form">
            <form action="index.php?act=sanpham" method="post">
              <input type="text" name="kyw" class="search-input-field" placeholder="Nhập từ khóa tìm kiếm..." />
              <input type="submit" value="Tìm kiếm" name="timkiem" class="search-submit-button" />
            </form>
          </div>
        </div>

        <div class="mr mt "><p>Tư vấn bán hàng:</p>
            <p>1900 9999</p>
          </div>
      </div>
      <div class="row mb menu">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
          <li><a href="index.php?act=lienhe">Liên hệ</a></li>
          <li><a href="index.php?act=gopy">Góp ý</a></li>
          <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
          <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
        </ul>
      </div>