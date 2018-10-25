@@ -0,0 +1,202 @@
<?php
session_start();
$_SESSION['uID'] = 0;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script type="text/javascript" language="javascript">
     function CheckSession(){
     var  a= '<%= Session["uID"].ToString() %>';
		     if(a!=1){
			     alert("invalid password");
		     }
     }

</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Neat &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
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

	<div class="fh5co-loader"></div>

   <div id="page">
		<nav class="fh5co-nav" role="navigation">
					<div class="container-wrap">
						<div class="top-menu hivecolor">
							<div class="row">
								<div class="col-xs-6">

									<h1><div id="fh5co-logo"><a href="index.php"><img src="img/BTlogo.png" alt="person" class="img-fluid" /></a>Login</div></h1>
								</div>
							</div>

						</div>
					</div>
		</nav>
	<div class="container-wrap" style="height:400px">

    	<div class="row">
			<form class="col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8" style="padding: 5%;" method="post" action="login.php">
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UserName" name="id">
					<!--<small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>-->
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
				</div>
			<button type="submit" class="btn btn-primary" id="submit" onclick="document.getElementById('submit')">Submit</button>
			</form>

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

	</body>
</html>
