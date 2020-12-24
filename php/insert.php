<?php
    // print_r($_POST);
    
    //連資料庫
    include "db.php"; 
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //設定連線編碼，防止中文字亂碼
    $connect->query("SET NAMES 'utf8'");
    
    $insertSql = "INSERT INTO userdata (name,email,password) VALUES ('$name','$email', '$password')";
    //呼叫query方法(SQL語法)
    $status = $connect->query($insertSql);
    
    if ($status) {
        echo '新增成功';
    } else {
        echo "錯誤: " . $insertSql . "<br>" . $connect->error;
    }

?>