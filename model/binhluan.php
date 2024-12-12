<?php
    function loadall_binhluan(){
        $sql="SELECT * FROM binhluan ORDER BY id DESC";
        $listbinhluan= pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql="DELETE FROM binhluan WHERE `binhluan`.`id` = ".$id;
        $listbinhluan= pdo_query($sql);
        return $listbinhluan;
    }
    function insert_binhluan($binhluan){
        $sql="INSERT INTO `binhluan` ( `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ( '$binhluan', '', '', CURRENT_TIMESTAMP)";
        pdo_execute($sql);
    }
?>