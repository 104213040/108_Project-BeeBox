<?php
    // 建立MySQL的資料庫連接 
    $host = '163.22.17.251';
    $user = 'beebox';
    $password = 'beebox1234';
    $database = 'pi'; // 預設使用的資料庫名稱
    $link = mysqli_connect($host, $user, $password, $database ); 
    $sql  = 'SELECT TOP 1* FROM `TEST` ';
    $Lo_result = mysqli_query($link,$sql);
    
    //抓GPS最後一筆
    $gps_sql  = 'SELECT * FROM `GPS` ORDER BY `Time` DESC limit 1';
    $GPS = mysqli_query($link,$gps_sql);
    while ($data = mysqli_fetch_array($GPS)){
      $time = $data['Time'];
      $Lo = $data['Longitude'];
      $La = $data['Latitude'];
      // echo "<font color='blue'>{$data['Longitude']}</font>";
      // return $data;
    }

    //抓GPS最後一筆
    $tbgps_sql  = 'SELECT * FROM `GPS` ORDER BY `Time` DESC limit 1,1';
    $tbGPS = mysqli_query($link,$tbgps_sql);
    while ($data = mysqli_fetch_array($tbGPS)){
      $tbtime = $data['Time'];
      $tbLo = $data['Longitude'];
      $tbLa = $data['Latitude'];
      // echo "<font color='blue'>{$data['Longitude']}</font>";
      // return $data;
    }	
    
	
    
    //抓溫溼度最後一筆
    $tnh_sql = 'SELECT * FROM `TNH` ORDER BY `Time` DESC limit 1';
    $TNH = mysqli_query($link,$tnh_sql);
    while ($data = mysqli_fetch_array($TNH)){
      $Tp = $data['Temperature'];
      $Hu = $data['Humidity'];
    }  

    //更新時間
    $now = time();
    $today = date("g:i a, F j, Y",$now);

    
?>