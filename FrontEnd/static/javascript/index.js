$(document).ready(function(){

    $("#login").submit(function(e){
        e.preventDefault(); //evita que el formulario mande todo hacia el servidor
        email= document.getElementById("usuario").value;
        clave= document.getElementById("clave").value;
        $.ajax({
            url: "Peticiones/registro.php",
            type: "POST",
            data: {
                    elEmail :email,
                    laClave : clave
            },
            success: function(data){
                if(data==1){
                    window.location.href="FrontEnd/paginaPrincipal.php";
                }
                
            }

        });
    });

});