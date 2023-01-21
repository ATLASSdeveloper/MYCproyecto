$(document).ready(function(){

    $("#acceder").click(function(){
        $.ajax({
            type : "POST",
            url : "Peticiones/registro.php",
            data : {opcion:1},
            success : function (data){
                if(data==0){
                    window.location.href="index.html";
                }else{
                    window.location.href="FrontEnd/paginaPrincipal";
                }
            }
        })
    });

});