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
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../static/css/styles_menu.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../static/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../static/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
        <link type="text/css" rel="stylesheet" href="./static/css/nouislider.min.css"/>
        <link rel="stylesheet" href="./static/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="./static/css/style.css"/>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="logo_mobile"><a href="menu.html"><img src="../static/images/Menu/logo.png"></a></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="menu.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="acerca_de.html">Acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.html">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="logo"><a href="menu.html"><img src="../static/images/Menu/logo.png"></a></div>
                <div class="menu_main">
                    <ul>
                        <li class="active"><a href="menu.html">Home</a></li>
                        <li><a href="acerca_de.html">Acerca de</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script src="../javascript/jquery.js"></script>
        <script src="../javascript/compra.js"></script>

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
    </head>
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
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="./menu.html">MiniAmazon</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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
<footer>

</footer>

</html>