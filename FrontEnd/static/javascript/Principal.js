$(document).ready(function(){

    $(".articulos").click(function(){
        id_articulo=$(this).attr("id");
        $.ajax({
            type : "Post",
            url : "../Peticiones/registro.php",
            data : {articulo_identificado:id_articulo},
            success : function(){
                window.location.href="../FrontEnd/info_articulos.php";
            }
        })
    });

});