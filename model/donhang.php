<?php
    function loadall_donhang(){
        $sql="SELECT * FROM bill ORDER BY id DESC";
        $listbinhluan= pdo_query($sql);
        return $listbinhluan;
    }
    function delete_donhang($id){
        $sql="DELETE FROM binhluan WHERE `binhluan`.`id` = ".$id;
        $listbinhluan= pdo_query($sql);
        return $listbinhluan;
    }
?>