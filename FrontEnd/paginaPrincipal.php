<?php

session_start();
//echo $_SESSION['user'];

?>

<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Miniamazon - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="./static/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="./static/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="./static/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="./static/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="./static/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="./static/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="./static/javascript/jquery.js"></script>
		<script src="./static/javascript/Principal.js"></script>        
</head>

<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +593 998881547</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> miniamazon@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Ambato - Ecuador</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./static/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Productos</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
								<!-- tab -->

<?php
	include_once("../Peticiones/funciones.php");
	echo impresionControladaArticulos();
?>
										
								<!-- /tab -->
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		
		<!-- /SECTION -->

		<!-- SECTION -->
		
		<!-- /SECTION -->
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row" >
							<div class="footer">
								<h3 class="footer-title">Sobre Nosotros</h3>
								<p>Somos un negocio en línea para la venta de diferentes productos ofrecidos por el mercado</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Ambato</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+593 58763456</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>miniamazon@email.com</a></li>
								</ul>
								<!-- copyright section start -->
								<div class="copyright_section">
                                        <div class="container">
                                            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="../menu.html">MiniAmazon</a></p>
                                        </div>
                                </div>
							</div>
					</div>
				</div>
			</div>
			<div id="bottom-footer" class="section">
				<div class="container">
				</div>
			</div>
		</footer>

		<!-- jQuery Plugins -->
		<script src="./static/js/jquery.min.js"></script>
		<script src="./static/js/bootstrap.min.js"></script>
		<script src="./static/js/slick.min.js"></script>
		<script src="./static/js/nouislider.min.js"></script>
		<script src="./static/js/jquery.zoom.min.js"></script>
		<script src="./static/js/main.js"></script>

	</body>
</html>

