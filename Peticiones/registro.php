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


    if(isset($_POST['minombre'])){
        $nom=$_POST['minombre'];
        $ap=$_POST['miapellido'];
        $cor=$_POST['micorreo'];
        $cl=$_POST['miclave'];

        crearUsuario($nom,$ap,$cor,$cl);
    }

    if(isset($_POST['opcion'])){
        if($_POST['opcion']==1){
            session_start();
            if($_SESSION['user']==""){
                return 0;
            }else{
                return 1;
            }
        }
    }

    if(isset($_POST['articulo_identificado'])){
        session_start();
        $_SESSION['articulo']=$_POST['articulo_identificado'];
    }

    if(isset($_POST['comboMiArticulo'])){
        $miArticulo=$_POST['comboMiArticulo'];
        include_once ("funciones.php");
        if($miArticulo == "Filtrar por tipo de articulos"){
            echo impresionControladaArticulos();
        }else{
            echo impresionComboBox($miArticulo);
        }
        
    }
?>