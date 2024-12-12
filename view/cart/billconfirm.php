<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">Thông tin đặt hàng</div>
                <div class="row boxcontent bill form">
                    <table>
                        <?php
                            if(isset($_SESSION['user'])){
                                $name=$_SESSION['user']['user'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                            }else{
                                $name="";
                                $address="";
                                $email="";
                                $tel="";
                            }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>

                </div>
            </div>
        </form>
        <div class="row mb">
        <div class="boxtitle">Thông tin giỏ hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php include "global.php";
    $tong = 0;
    $i=0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart['4'];
        $tong += $ttien;
        echo '
        <tr>
            <td><img src="' . $hinh . '" width="50px" height="50px" alt=""></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            <td>' . $ttien . '</td>
        </tr>
    ';
    $i+=1;
    }
    echo '
    <tr>
        <td colspan="3">
        <td>Tổng tiền: ' . $tong . '</td>
        <td></td>
    </tr>
    ';?>

                </table>
            </div>
            
        </div>
 

        <div class="row mb ">
            <div class="boxtitle">Thông tin thanh toán</div>
            <div class="row boxcontent">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="pttt" >Chuyển khoản ngân hàng</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb bill">
            <a href="index.php?act=billconfirm"><input type="submit" value="Đồng ý đặt hàng"></a>
        </div>

    </div>
    <?php
            include "view/boxright.php";
            ?>
            </div>