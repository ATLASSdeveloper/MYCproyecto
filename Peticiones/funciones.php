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

function enviarInformacionArticulo($id){
    return detalle_articulos($id);
}
?>
