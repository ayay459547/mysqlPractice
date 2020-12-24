<?php
    include "db.php";

    $idn = $_POST['idn'];

    $connect->query("SET NAMES 'utf8'");
    $deleteSql = "DELETE FROM userdata WHERE id='$idn'";
    $status = $connect->query($deleteSql);

    if($status){
        echo "刪除成功";
    }else{
        echo "刪除失敗";
    }

?>