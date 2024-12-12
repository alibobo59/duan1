<?php
 session_start();
    include "../model/danhmuc.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/sanpham.php";
    include "../model/donhang.php";
    include "../model/pdo.php";
    include "header.php";
   
    if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
        if($role !=1){
            header("Location:../index.php"); 
            exit();
        }
    }
    else {
        header("Location: ../index.php"); 
        exit(); 
    }

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                // ktra người dùng có nhấn nút add hay không?
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao= "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&& (($_GET['id'])>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'hiendm':
                if(isset($_GET['id'])&& (($_GET['id'])>0)){
                    $sql="UPDATE `danhmuc` SET `kiemtra` = '1' WHERE `danhmuc`.`id` =". $_GET['id'];
                    pdo_execute($sql);
                }
                $sql="SELECT * FROM `danhmuc` ORDER BY id";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/hiendanhmuc.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&& (($_GET['id'])>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($tenloai,$id);
                    $thongbaoupdate= "Cập nhật mã loại <strong class='fs-5 text-danger text-center p-2 fw-bolder'>".$id." </strong>thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            // sản phẩm
            case 'addsp':
                // ktra người dùng có nhấn nút add hay không?
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $hinh=$_FILES['hinh']['name'];
                    $mota=$_POST['mota'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
                        if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                            $thongbao= "Đã thêm mới sản phẩm thành công!";
                        } else {
                            $thongbao = "Lỗi trong quá trình lưu file!";
                        }
                    } else {
                        
                        $thongbao="Lỗi upload file: " . $_FILES['hinh']['error'];
                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&& (($_GET['id'])>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham=loadall_sanpham('',0);
                include "sanpham/list.php";
                break;
            case 'hiensp':
                if(isset($_GET['id'])&& (($_GET['id'])>0)){
                    show_sanpham($_GET['id']);
                }
                $listsanpham=loadall_sanpham('',0);
                include "sanpham/hiensanpham.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&& (($_GET['id'])>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $hinh=$_FILES['hinh']['name'];
                    $mota=$_POST['mota'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
                        if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                            $thongbao= "Hình ảnh ". $_FILES['hinh']['name']." đã được tải lên thành công!";
                        } else {
                            $thongbao = "Lỗi trong quá trình lưu file!";
                        }
                    } else {
                        
                        $thongbao="Lỗi upload file: " . $_FILES['hinh']['error'];
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbaoupdate= "Cập nhật mã loại <strong class='fs-5 text-danger text-center p-2 fw-bolder'>".$id." </strong>thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham('',0);
                include "sanpham/list.php";
                break;
            case 'dskh':
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'suatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    sua_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'dsbl':
                $listbinhluan=loadall_binhluan();
                include "binhluan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan=loadall_binhluan();
                include "binhluan/list.php";
                break;
            case 'donhang':
                $listdonhang=loadall_donhang();
                include "donhang/list.php";
                break;
            default:
                include 'home.php';
                break;
        }
    }else{
        include 'home.php';
    }
    
    include "footer.php";
?>