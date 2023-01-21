<?php

include_once("../static/BD/consultas.php");

function impresionControlada(){
    $datos=listarArticulos();
    $acumulador="";
    foreach ($datos as $d){
        $acumulador.=  "<div class='col'>
        <div class='card h-100'>
        <a href='#' id=".$d['id']." class='articulos'><img src='data:image/jpg;base64,".base64_encode($d['imagen'])."' class='card-img-top'
            alt='Palm Springs Road' with='300' height='200'/></a>
          <div class='card-body'>
            <hr>
            <h5 class='card-title'>".$d['nombre']."</h5>
            <p class='card-text'>".$d['marca']."</p>
          </div>
        </div>
      </div>";
    }
    return $acumulador;
}

function impresionControladaArticulos(){
  $datos=listarArticulos();
  $acumulador="";
  foreach ($datos as $d){
      $acumulador.=  "<div class='col-md-3'><div class='product'>
      <div class='product-img'>
      <img  width='150' height='250' src='data:image/jpg;base64,".base64_encode($d['imagen'])."' />
        <div class='product-label'>
          <span class='new'>NEW</span>
        </div>
      </div>
      <div class='product-body'>
        <p class='product-category'>".$d['marca']."</p>
        <h3 class='product-name'><a  >".$d['nombre']."</a></h3>
        <h4 class='product-price'>$".$d['precio']." </h4>
        <div class='product-rating'>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
        </div>

      </div>
      <div class='add-to-cart'>
        <a href='#' class=' articulos ' id=".$d['id']."><button class='add-to-cart-btn'><i class='fa fa-dollar'></i> Comprar</button></a>
      </div>
    </div></div>";
  }
  return $acumulador;
}

function enviarInformacionArticulo($id){
    return detalle_articulos($id);
}


?>
