<?php

session_start();
include_once("../Peticiones/funciones.php");
$dato=enviarInformacionArticulo($_SESSION['articulo']);
?>

<!DOCTYPE html>
<html>

<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</header>

<body>
<div class="d-flex">
  <div class=" p-2 w-50" align=center>
      <?php echo "<img src='data:image/jpg;base64,".base64_encode($dato['imagen'])."' 
            alt='Palm Springs Road' with='400' height='500'/>";?>
  </div>
  <div class="align-items-center d-flex justify-content-around p-2 w-50">
    <a > <h1><?php echo $dato['nombre']?></h1> <br> 
    <h2><?php echo $dato['marca']?></h2> <br>
    <h4><?php echo $dato['precio']?>$ </h4><br>
    <h4><?php echo $dato['tipo']?></h4></a>
  </div>
</div>
</body>

<footer>

</footer>
</html>
