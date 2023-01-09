$(document).ready(function(){

    $("#registro").submit(function(e){
        e.preventDefault();
        nombre=document.getElementById("nombres").value;
        apellido=document.getElementById("apellidos").value;
        correo=document.getElementById("correo").value;
        clave=document.getElementById("contrasenia").value;
        $.ajax({
            type : "POST",
            url : "Peticiones/registro.php",
            data : {minombre: nombre, miapellido:apellido,micorreo:correo,miclave:clave},
            success : function(data){
                window.location.href="index.html";
            }
        });

    });

});