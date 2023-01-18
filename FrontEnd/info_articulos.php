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
<script src="../javascript/jquery.js"></script>
<script src="../javascript/compra.js"></script>
</header>

<body>
<div class="d-flex">
  
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
    <input type="password" class="form-control" id="clave" >

    <div class="form-text" hidden id="verifica" style="color:red">Credenciales no válidas</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning botonConfirmar" id=<?php echo $dato['id']?>>Comprar</button>
      </div>
    </div>
  </div>
</div>
<footer>

</footer>
</html>
