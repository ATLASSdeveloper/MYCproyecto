<?php

session_start();
include_once("../Peticiones/funciones.php");
$dato=enviarInformacionArticulo($_SESSION['articulo']);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Articulos1</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->

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

		

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script src="../javascript/jquery.js"></script>
        <script src="../javascript/compra.js"></script>
</head>


    <!-- header section start -->
    

    <header>
			<!-- TOP HEADER -->

			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header" >
				<!-- container -->
				<div class="container">
					<!-- row -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="paginaPrincipal.php" class="logo">
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
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
    


    <body>
        <div class="row text-center">

            <div class=" p-2 w-50" align=center>

                <div class="card border-warning mb-5" style="max-width: 35rem;">
                    <div class="card-body">
                        <?php echo "<img src='data:image/jpg;base64,".base64_encode($dato['imagen'])."' 
                            alt='Palm Springs Road' with='400' height='500'/>";?>
                    </div>
                </div>
            </div>
            <div class="align-items-center d-flex justify-content-around p-2 w-50">
            <a > <h1>Producto : <?php echo $dato['nombre']?></h1> <br> 
    <h2>Marca : <?php echo $dato['marca']?></h2> <br>
    <h2>Precio :<?php echo $dato['precio']?>$ </h2><br>
    <h2>Tipo : <?php echo $dato['tipo']?><br></h2>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning"><h2>Comprar</h2></button></a>
            </div>
        </div>
    </body>
    
    <!-- blog section end -->
    <!-- footer section start -->
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
                                <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="./menu.html">MiniAmazon</a></p>
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
    <!-- footer section end -->
    <!-- copyright section start -->
    
    <!-- copyright section end -->
    <!-- Javascript files-->

</body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pago por PayPal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Ingrese el correo asosiado a su cuenta PayPal</div>
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="clave">

                <div class="form-text" hidden id="verifica" style="color:red">Credenciales no válidas</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning botonConfirmar" id=<?php echo
                    $dato['id']?>>Comprar</button>
            </div>
        </div>
    </div>
</div>


</html>