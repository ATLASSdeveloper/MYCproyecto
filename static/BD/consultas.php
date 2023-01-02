
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
