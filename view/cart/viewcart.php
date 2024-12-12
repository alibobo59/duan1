<div class="row mb">
    <?php include "global.php";
    ?>
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php viewcart()?>

                </table>
            </div>
            
        </div>

        <div class="row mb bill">
        <a href="index.php?act=bill">
            <input type="submit" value="Đồng ý đặt hàng">
        </a>
            <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
        </div>


    </div>
    <?php
            include "view/boxright.php";
            ?>
            </div>