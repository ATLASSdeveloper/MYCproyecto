$(document).ready(function(){
    $(".botonConfirmar").click(function(){
        if(document.getElementById("correo").value=="" ||document.getElementById("clave").value=="" ){
            document.getElementById("verifica").hidden=false;
        }else{
            window.location.href="../factura.php";
        }
    })
})