<?php
    function insert_danhmuc($tenloai){
        $sql= "INSERT INTO `danhmuc` (`name`,`kiemtra`) VALUES ('$tenloai','1')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="UPDATE `danhmuc` SET `kiemtra` = '0' WHERE `danhmuc`.`id` =". $id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        // Xử lý tham số sapxep
        $sapxep = (isset($_GET['sapxep']) && $_GET['sapxep'] == 1) ? 1 : 0; 
        $order = $sapxep == 1 ? "desc" : "asc"; 
        // Câu lệnh SQL
        $sql = "SELECT * FROM `danhmuc` ORDER BY id $order";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql="SELECT * FROM danhmuc WHERE id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($tenloai,$id){
        $sql= "UPDATE `danhmuc` SET `name` = '".$tenloai."' WHERE `danhmuc`.`id` =". $id;
        pdo_execute($sql);
    }
?>