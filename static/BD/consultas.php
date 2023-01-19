
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

    function listarArticulos(){
        $conexion=conectar();
        $consulta=$conexion->prepare("SELECT * FROM articulos");
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        return $resultado;
    }

    function detalle_articulos($id){
        $conexion=conectar();
        $consulta=$conexion->prepare("SELECT * FROM articulos Where id=?");
        $consulta->execute(array($id));
        $resultado=$consulta->fetch();
        return $resultado;
    }

    function articulos($id){
        $conexion=conectar();
        $consulta=$conexion->prepare("SELECT * FROM articulos Where id=?");
        $consulta->execute(array($id));
        $resultado=$consulta->fetchAll();
        return $resultado;
    }

    function factura($comprador,$fecha,$articulo,$cantidad,$total){
        $conexion=conectar();
        $consulta=$conexion->prepare("INSERT INTO facturas values(0,?,?,?,?,?)");
        $consulta->execute(array($comprador,$fecha,$articulo,$cantidad,$total));
    }
?>
