<?php

include_once("../static/BD/consultas.php");


    if(isset($_POST['elEmail'])){
        $correo=$_POST['elEmail'];
        $clave=$_POST['laClave'];

        if(isset($_SESSION)){
            $_SESSION['user']="";
        }else{
            session_start();
            $_SESSION['user']="";
        }

        if(autentificarUsuario($correo, $clave)==1){
            $identificacion=identificarUsuario($correo,$clave);
            $_SESSION['user']=$identificacion;
            echo 1;
        }else{
            echo 0;
        }
    }

?>