
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

<?php 
    include_once("conexion.php");
    function autentificarUsuario($e,$c){
        
        $conexion=conectar();
        $consulta=$conexion->prepare("SELECT COUNT(*) cantidad FROM usuarios where email=? AND clave=? ");
        $consulta->execute(array($e,$c));
        $resultado=$consulta->fetch();
        return $resultado['cantidad'];

    }

?>