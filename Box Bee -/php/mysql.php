<?php
    // 建立MySQL的資料庫連接 
    $host = '163.22.17.251';
    $user = 'beebox';
    $password = 'beebox1234';
    $database = 'pi'; // 預設使用的資料庫名稱
    $link = mysqli_connect($host, $user, $password, $database ); 
    $sql  = 'SELECT * FROM `TEST` ';
    $Lo_result = mysqli_query($link,$sql);
    
    while ($data = mysqli_fetch_array($Lo_result)){
      echo $data['ID'];
    }
?>