<?php
    include "db.php";

    //設定連線編碼，防止中文字亂碼
    $connect->query("SET NAMES 'utf8'");
    
    //選擇資料表userdata
    $selectSql = "SELECT * FROM userdata";
    //呼叫query方法(SQL語法)
    $memberData = $connect->query($selectSql);
    //有資料筆數大於0時才執行
    if ($memberData->num_rows > 0) {
        echo "<table>";
        echo "  <tr>";
        echo "      <th>ID</th><th>name</th><th>email</th><th>password</th>";
        echo "  </tr>";
        while ($row = $memberData->fetch_assoc()) {
            print_r("<tr>");
            print_r("   <td>$row[id]</td><td>$row[name]</td><td>$row[email]</td><td>$row[password]</td>");            
            print_r("</tr>");
        }
        echo "</table>";
    } else {
        echo '0筆資料';
    }

?>