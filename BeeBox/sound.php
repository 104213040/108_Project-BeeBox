<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BEE BOX</title>
	<link rel="shortcut icon" href="img/map_marker.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- custom.css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<?php
		    $database = 'pi';
			include 'mysql.php' ;
		?>
	<div class="fh5co-loader"></div>

	<div id="page">
	<!-- nav.html -->
	<nav class="fh5co-nav hivecolor" role="navigation" id="nav">
		<div class="container-wrap ">
			<div class="top-menu">
				<div class="row menu-0">
					<div class="col-xs-6">
						<div id="fh5co-logo"><a href="index.php" ><img src="img/bt.png" alt="person" class="img-fluid"/></a><span>蜂箱監測系統</span></div>
					</div>
					<div class="col-xs-6 text-right menu-1">
						<div>
							<ul>
								<li><a href="index.php">最新數據</a></li>
								<li class="has-dropdown active">
									<a href="history.php" >歷史資料</a>
									<ul class="dropdown">
										<li><a href="history.php">溫溼度</a></li>
										<li><a href="sound.php">聲音</a></li>
									</ul>
								</li>
								<li><a href="aboutus.html">關於我們</a></li>
							</ul>   
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

<div class="container-wrap" id="VOI">
	<footer id="fh5co-footer" role="contentinfo">
	<div class="row">
		<div class="col-md-12">
			<h3>頻率分析</h3>
		</div>
	</div>
	<div class="row animate-box">
		<div class="card-body col-md-6">
	        <canvas id="lineChartExample"></canvas>
	    </div>
		<div class="col-md-6">
		    <table class="table table-striped table-hover">
		        <thead>
		        <tr>
		        <th style="font-family:Microsoft JhengHei;font-size:18px;">日期時間</th>
		        <th style="font-family:Microsoft JhengHei;font-size:18px;">頻率</th>
	        	<th style="font-family:Microsoft JhengHei;font-size:18px;">離差度</th>
	        	</tr>
	        	</thead>
	        	<tbody>
		        <?php
				for($i=1;$i<=mysqli_num_rows($tbsound);$i++){ 
				    $rs=mysqli_fetch_row($tbsound);?><tr>
                <td><?php echo $rs[1]?></td>
                <td><?php echo $rs[2]."Hz"?></td>
                <td><?php echo $rs[3]*$p."%"?></td>
                </tr><?php } ?>
            </tbody>
            </table>
	    </div>
	</div>
	</footer>
</div><!-- END container-wrap -->

<div class="container-wrap">
    <footer id="fh5co-footer" role="contentinfo">
	<div class="row animate-box">
		<div class="col-md-12">
			<h3>頻率分析</h3>
		</div>
	</div>
    <div class="row animate-box">            
            <div class="col-md-4 text-center">
				<audio controls>
                    <source src="audio/rec09061628.wav.wav" type="audio/mpeg">
                  Your browser does not support the audio element.
                  </audio>
                  <div class="text-center animate-box">
					<h4 style="font-size:18px;font-family:Microsoft JhengHei;font-weight:normal;">正常蜂箱</h4>
					<span>rec09061628</span>
					<a class="work" style="background-image: url(images/rec09061628.wav.wav-power[800_10000].png);"></a>
				</div>
			</div>
			<div class="col-md-4">
				<audio controls>
                    <source src="audio/rec09061629.wav.wav" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <div class="text-center animate-box">
					<h4 style="font-size:18px;font-family:Microsoft JhengHei;font-weight:normal;">正常蜂箱</h4>
					<span>rec09061629</span>
					<a class="work" style="background-image: url(images/rec09061629.wav.wav-power[800_10000].png);"></a>
				</div>
			</div>
			<div class="col-md-4">
				<audio controls>
                    <source src="audio/rec09061632.wav.wav" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <div class="text-center animate-box">
					<h4 style="font-size:18px;font-family:Microsoft JhengHei;font-weight:normal;">失王蜂箱</h4>
					<span>rec09061632</span>
					<a class="work" style="background-image: url(images/rec09061632.wav.wav-power[800_10000].png);"></a>
				</div>
			</div>
		</div>
	</footer>
</div><!-- END container-wrap -->
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 BeeTeam. All Rights Reserved.</small>
					</p>

				</div>
			</div>		
</div>





	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- googlemap & tnh chart-->
    <script src="js/Chart.min.js"></script>
	<script type="text/javascript">
	

	
	/*聲音頻率RMS*/
	$(document).ready(
	function () { 'use strict';
		var brandPrimary = 'rgba(51, 179, 90, 1)';
		var LINECHARTEXMPLE   = $('#lineChartExample');
		var lineChartExample = new Chart(LINECHARTEXMPLE, {
		type: 'line',
			data: {
				labels: ["3小時前", "2小時前", "1小時前", "30分鐘前", "現在"],
				datasets: [
					{
						label: "頻率(單位: Hz)",
						fill: true,
						lineTension: 0.3,
						backgroundColor: "rgba(51, 179, 90, 0.38)",
						borderColor: brandPrimary,
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffset: 0.0,
						borderJoinStyle: 'miter',
						borderWidth: 1,
						pointBorderColor: brandPrimary,
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 5,
						pointHoverBackgroundColor: brandPrimary,
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointHoverBorderWidth: 2,
						pointRadius: 1,
						pointHitRadius: 10,
						data: [<?php while ($chz = mysqli_fetch_array($tbHz)){echo $chz[0].",";}?>],
						spanGaps: false
					},
					{
						label: "離差度(單位: %)",
						fill: true,
						lineTension: 0.3,
						backgroundColor: "rgba(75,192,192,0)",
						borderColor: "rgba(75,192,192,1)",
						borderCapStyle: 'butt',
						borderDash: [],
						borderDashOffset: 0.0,
						borderJoinStyle: 'miter',
						borderWidth: 1,
						pointBorderColor: "rgba(75,192,192,1)",
						pointBackgroundColor: "#fff",
						pointBorderWidth: 1,
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(75,192,192,1)",
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointHoverBorderWidth: 2,
						pointRadius: 1,
						pointHitRadius: 10,
						data: [<?php while ($chr = mysqli_fetch_array($tbRMS)){echo $chr[0]*$pp.",";}?>],
						spanGaps: false
					}
				]
			}
		});

	});

</script>

	</body>
</html>
