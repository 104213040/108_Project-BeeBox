<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BEEBOX</title>
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
		include 'php/mysql.php' ;
	?>	
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation" id="nav">
		<div class="container-wrap">
			<div class="top-menu hivecolor">
				<div class="row">
					<div class="col-xs-6">
                    
						<div id="fh5co-logo"><a href="index.php"><img src="img/BTlogo.png" alt="person" class="img-fluid" /></a>草屯時代養蜂場</div>
					</div>
					<div class="col-xs-12 text-right menu-1">
						<ul>
							<li ><a href="#Latest">最新數據</a></li>
							<li class="has-dropdown">
                                <a href="#" >歷史資料</a>
								<ul class="dropdown">
                                    <li><a href="#TNH">溫溼度</a></li>
									<li><a href="#">聲音</a></li>
								</ul>
							</li>
                            <li><a href="#AboutUs">關於我們</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap" id="Latest">
		<div id="fh5co-counter" class="fh5co-counters">
			<div class="row">
				<!-- 左半邊數據顯示 -->
				<div class="col-md-6">
					<!-- 蜂箱選擇 -->
					<div class="col-md-12 text-center animate-box">
						<p>目前顯示
							<select id="selectbox" data-selected="">
								<option value="" selected="selected">box1</option>
								<option value="1">box2</option>
							</select>
						</p>
					</div>
					<!-- 溫溼度及狀態 -->
					<div class="col-md-12 row">
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $Tp?>" data-speed="4000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">溫度°C</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo "$Hu" ?>" data-speed="4000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">濕度%</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter ">良好</span>
							<span class="fh5co-counter-label">蜜蜂狀態</span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="text-center animate-box">
						<p>最後更新時間: <?php echo $time?></p>
						</div>
					</div>
				</div>
				<!-- 右半邊 -->
				<div class="col-md-6" >
					<div id="gmap_canvas"></div>
				</div>
			</div>
		</div>

		
		

	</div><!-- END container-wrap -->
	
    <div class="container-wrap" id="TNH">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				
				<div class="col-md-6 col-md-push-1">
				
					<h4>溫溼度折線圖</h4>
					  <div class="card-body">
                          <canvas id="lineChartExample"></canvas>
                      </div>
				</div>

				<div class="col-md-5 col-md-push-1">
					<table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>日期時間<br> Time</th>
                          <th>溫度<br> Temperature</th>
                          <th>濕度<br> Humidity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          for($i=1;$i<=mysqli_num_rows($tbtnh);$i++)
                            { $rs=mysqli_fetch_row($tbtnh);
                        ?><tr>
                        <td><?php echo $rs[1]?></td>
                        <td><?php echo $rs[2]?></td>
                        <td><?php echo $rs[3]?></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
					
				</div>

				

			</div>

		</footer>
	</div><!-- END container-wrap -->

	<div class="container-wrap" id="AboutUs">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
			   				<div class="slider-text-inner text-center">
			   					<h1>國立暨南國際大學</h1>
									<h2>資訊管理系</h2>
										<h2>108 級專題組 / BEEBOX</h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-work">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-4.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-5.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="work-single.html" class="work" style="background-image: url(images/portfolio-6.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->


	<div class="container-wrap" id="Footer">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-3 fh5co-widget">
					<h4>About Neat</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Latest Posts</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Amazing Templates</a></li>
						<li><a href="#">100+ Free Download Templates</a></li>
						<li><a href="#">Neat is now available</a></li>
						<li><a href="#">Download 1000+ icons</a></li>
						<li><a href="#">Big Deal for this month of March, Join Us here</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://gettemplates.co">gettemplates.co</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
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

	<!-- choose hive -->	
    <script src="js/selectbar.js"></script>
    
    <!-- googlemap & tnh chart-->
	<script src="js/Chart.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAtg4aOaTtIbJ3bkYGoPENDgguwcGBbFNI&sensor=false"></script>
    <script type="text/javascript">
		/*地圖*/
		function init_map() {
			/*地圖參數相關設定 Start*/
			var Options = {
				zoom: 14, /*縮放比例*/
				center: new google.maps.LatLng(<?php echo $La?>,<?php echo $Lo?>) /*所查詢位置的經緯度位置*/
			};

			map = new google.maps.Map(document.getElementById("gmap_canvas"), Options);
			/*地圖參數相關設定 End*/

			/*自行設定圖標 Start*/
			var image = {
				url: 'img/map_marker.png', /*自定圖標檔案位置或網址*/
				// This marker is 20 pixels wide by 32 pixels high.
				size: new google.maps.Size(50, 50), /*自定圖標大小*/
				// The origin for this image is (0, 0).
				origin: new google.maps.Point(0, 0),
				// The anchor for this image is the base of the flagpole at (0, 32).
				anchor: new google.maps.Point(0, 32)
			};
			marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(<?php echo $La?>,<?php echo $Lo?>), /*圖標經緯度位置*/
				icon: image
			});
			/*自行設定圖標 End*/

			/*所查詢位置詳細資料 Start*/
			infowindow = new google.maps.InfoWindow({content:"<?php echo $Lo?>,<?php echo $La?>"});
			infowindow.open(map, marker);
			/*所查詢位置詳細資料 End*/
		}
		google.maps.event.addDomListener(window, 'load', init_map);
		
		/*溫溼度*/
		$(document).ready(
		function () { 'use strict';
			var brandPrimary = 'rgba(51, 179, 90, 1)';
			var LINECHARTEXMPLE   = $('#lineChartExample');
			var lineChartExample = new Chart(LINECHARTEXMPLE, {
			type: 'line',
				data: {
					labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
					datasets: [
						{
							label: "溫度(單位 °C)",
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
							data: [<?php while ($cht = mysqli_fetch_array($tbt)){echo $cht[0].",";}?>],
							spanGaps: false
						},
						{
							label: "濕度(單位: %)",
							fill: true,
							lineTension: 0.3,
							backgroundColor: "rgba(75,192,192,0.4)",
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
							data: [<?php while ($chh = mysqli_fetch_array($tbh)){echo $chh[0].",";}?>],
							spanGaps: false
						}
					]
				}
			});
		
		});


		// navbar 滑動特效
		var menuScroll = function(){
			$('a[href^="#"]').on('click', function(event) {
				var target = $(this.getAttribute('href'));
				if( target.length ) {
					event.preventDefault();
					$('html, body').stop().animate({
						scrollTop: target.offset().top
					}, 1000);
				}
			});
		};
		$(function(){
			menuScroll();
		});

	</script>

	</body>
</html>

