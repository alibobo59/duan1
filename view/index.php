<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/binhluan.php";
include "model/danhmuc.php";
include "view/header.php";
include "global.php";
include "model/taikhoan.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop = loadall_sanpham_top();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != '')) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm=0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $listbinhluan=loadall_binhluan();
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $tel=$_POST['tel'];
                    $address=$_POST['address'];
                    insert_taikhoan($user,$pass,$email,$address,$tel);
                    $thongbao="Đăng ký tài khoản thành công! Vui lòng đăng nhập để thực hiện chức năng!";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('Location:index.php');
                        $thongbao="Đăng nhập thành công!";
                    }else{
                        $thongbao="Tài khoản không tồn tại. Vui lòng đăng ký!";
                    };
                    
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $id=$_POST['id'];
                    if(($_POST['tel']!="")&&(is_numeric($_POST['tel']))){
                        $tel=$_POST['tel'];
                    }else{
                        $tel=0;
                    }
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location:index.php?act=edit_taikhoan');
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
        case 'quenmk' :
            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                $email=$_POST['email'];
                $checkemail=checkemail($email);
                if(is_array($checkemail)){
                    $thongbao="Mật khẩu của bạn là:".$checkemail['pass'];
                }else{
                    $thongbao="Email này không tồn tại!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'addbl': 
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $binhluan=$_POST['binhluan'];
                $idpro = $_GET['idsp'];
                echo $idpro;
               
                $sql="INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES (NULL, '$binhluan', '5', '16', CURRENT_TIMESTAMP)";
                pdo_execute($sql);
                $listbinhluan=loadall_binhluan();
            }
            // header("Refresh:0");
            
            break;
        case 'thoat':
            session_unset();
            header("location:index.php");
            break;
        case 'lienhe' :
            include "view/lienhe.php";
            break;
        case 'gopy' :
            include "view/gopy.php";
            break;
        case 'hoidap' :
            include "view/hoidap.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>