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
      $Lo = $data['Longitude'];
      $La = $data['Latitude'];
      // echo "<font color='blue'>{$data['Longitude']}</font>";
      // return $data;
    }
    $Lo= round(($Lo-($Lo%1000))*100/60+($Lo%1000),3);
	$La=round(($La-($La%1000))*100/60+($La%1000),3);

	//抓溫溼度最後一筆
    $tnh_sql = 'SELECT * FROM `TNH` ORDER BY `Time` DESC limit 1';
    $TNH = mysqli_query($link,$tnh_sql);
    while ($data = mysqli_fetch_array($TNH)){
      $time = $data['Time'];
      $Tp = $data['Temperature'];
      $Hu = $data['Humidity'];
    }

    //抓聲音Hz.RMS最後十筆
    $tbsound_sql = 'SELECT * FROM `sound` ORDER BY `Time` DESC limit 10';
    $tbsound = mysqli_query($link,$tbsound_sql);
    $p=100;
    $pp=10000;

    //抓聲音Hz最後十筆
    $tbHz_sql = 'SELECT `frequency` FROM `sound` ORDER BY `Time` DESC limit 5';
    $tbHz = mysqli_query($link,$tbHz_sql);
    
    //抓RMS最後十筆
    $tbRMS_sql = 'SELECT `RMS` FROM `sound` ORDER BY `Time` DESC limit 5';
    $tbRMS = mysqli_query($link,$tbRMS_sql);

    //抓GPS最後十筆
    $tbgps_sql  = 'SELECT * FROM `GPS` ORDER BY `Time` DESC limit 10';
    $tbGPS = mysqli_query($link,$tbgps_sql);

    //抓溫溼度最後十筆
    $tbtnh_sql = 'SELECT * FROM `TNH` ORDER BY `Time` DESC limit 10';
    $tbtnh = mysqli_query($link,$tbtnh_sql);

	//抓溫度最後十筆
    $tbt_sql = 'SELECT `Temperature` FROM `TNH` ORDER BY `Time` DESC limit 10';
    $tbt = mysqli_query($link,$tbt_sql);

	//抓濕度最後十筆
    $tbh_sql = 'SELECT `Humidity` FROM `TNH` ORDER BY `Time` DESC limit 10';
    $tbh = mysqli_query($link,$tbh_sql);

    //更新時間
    $now = time();
    $today = date("g:i a, F j, Y",$now);

?>
