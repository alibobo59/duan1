<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql= "INSERT INTO `sanpham` ( `name`, `price`, `img`, `mota`, `iddm`,`kiemtrasp`) VALUES ( '$tensp', '$giasp', '$hinh', '$mota','$iddm',0)";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="UPDATE `sanpham` SET `kiemtrasp` = 1 WHERE `sanpham`.`id` = ". $id;
        pdo_execute($sql);
    }
    function show_sanpham($id){
        $sql="UPDATE `sanpham` SET `kiemtrasp` = '0' WHERE `sanpham`.`id` =". $id;
        pdo_execute($sql);
    }
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY id limit 0,9  ";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_top(){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY luotxem desc limit 0,9  ";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw='',$iddm=0){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ";
        if($kyw!=""){
            $sql .= " AND name LIKE '%".$kyw."%' ";
        }
        if($iddm>0){
            $sql .= " AND iddm = '".$iddm."' ";
        }
        $sql .= " ORDER BY id";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadone_sanpham($id){
        $sql="SELECT * FROM sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return '';
        }
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="SELECT * FROM sanpham WHERE iddm='".$iddm."'AND id <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!=''){
            $sql=" UPDATE `sanpham` SET `id` = '$id', `name` = '$tensp', `price` = '$giasp', `img` = '$hinh', `mota` = '$mota', `kiemtrasp` = '0', `iddm` = '$iddm' WHERE `sanpham`.`id` = " .$id;
        }else{
            $sql=" UPDATE `sanpham` SET `id` = '$id', `name` = '$tensp', `price` = '$giasp', `mota` = '$mota', `kiemtrasp` = '0', `iddm` = '$iddm' WHERE `sanpham`.`id` = " .$id; 
        }
        pdo_execute($sql);
    }
?>