<?php
    include "db.php";

    $idn = $_POST['idn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connect->query("SET NAMES 'utf8'");
    $updateSql = "UPDATE userdata SET name = '$name',email='$email',password='$password' WHERE id = '$idn'";
    $status = $connect->query($updateSql);
    
    if ($status) {
        echo '更新成功';
    } else {
        echo "錯誤: " . $updateSql . "<br>" . $connect->error;
    }

?>