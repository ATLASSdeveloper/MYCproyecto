
<?php 

    function conectar(){
        $servidor="localhost";
        $usuario="root";
        $clave="";
        $baseDatos="proyectomycs";

        $con= new PDO('mysql:host='.$servidor.';dbname='.$baseDatos, $usuario, $clave);
        return $con;

    }

?>


