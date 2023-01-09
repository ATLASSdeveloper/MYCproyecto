
<?php 

    include_once("conexion.php");
    function autentificarUsuario($e,$c){
        
        $conexion=conectar();
        $consulta=$conexion->prepare("SELECT COUNT(*) cantidad FROM usuarios where email=? AND clave=? ");
        $consulta->execute(array($e,$c));
        $resultado=$consulta->fetch();
        return $resultado['cantidad'];

    }
    function identificarUsuario($correo,$clave){
        $conexion=conectar();
        $consulta=$conexion->prepare("SELECT id FROM usuarios where email=? AND clave=? ");
        $consulta->execute(array($correo,$clave));
        $resultado=$consulta->fetch();
        return $resultado['id'];
    }
    function crearUsuario($nom,$ap,$cor,$cl){
        $conexion=conectar();
        $consulta=$conexion->prepare("INSERT INTO usuarios VALUES (0,?,?,?,?)");
        $consulta->execute(array($nom,$ap,$cor,$cl));
    }
?>
