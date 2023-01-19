

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="javascript/jquery.js"></script>
<script src="javascript/index.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniAmazon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="static/css/estiloprincipal.css">
    <link rel="stylesheet" href="static/css/styles.css">
</head>


<body background="static/images/fondo.jpg">
    <div class="card-header bg-black"></div>
    <div class="card-body">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <i class="far fa-building text-danger fa-6x float-start"></i>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-12">

                    <ul class="list-unstyled float-end">
                        <li style="font-size: 30px; color: red;">MiniAmazon</li>
                        <li>Avenida siempre viva</li>
                        <li>0985632456</li>
                        <li>miniamazon@gmail.com</li>
                    </ul>
                </div>
            </div>
            <p class="fw-bold">Fecha de emisión: <span class="text-muted"><?php echo $fechaActual = date('d/m/y h:i:s')?></span></p>
            <div class="row text-center">
                <h3 class="text-uppercase text-center mt-3" style="font-size: 40px;">Factura</h3>
                
            </div>

            <div class="row mx-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            session_start();
                            $usuario=$_SESSION['user'];
                            $articulo=$_SESSION['articulo'];
                            include_once("static/BD/consultas.php");

                            $dato=articulos($articulo);
                            $impresion="";
                            $subtotal=0;
                            foreach ($dato as $d){
                                $impresion.=  "<tr>
                                                <td>".$d['nombre']."</td>
                                                <td><i class='fas fa-dollar-sign'></i> ".$d['precio']."</td>
                                                <td>1</td>
                                                </tr>";
                                $subtotal=$subtotal+($d['precio']*1);
                            }
                            $total=($subtotal*112)/100;
                            factura($usuario,$fechaActual,$articulo,1,$total);
                            echo $impresion;
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="row">
                <div class="col-xl-8">
                    <ul class="list-unstyled float-end me-0">
                        <li><span class="me-3 float-start">Subtotal:</span>
                        </li>
                        <li> <span class="me-5"> Iva:</span></i> </li>
                        <li><span class="float-start" style="margin-right: 35px;">Total con Iva:</span><i
                                ></i> </li>
                    </ul>
                </div>
                <div class="col-xl-1">
                    <ul class="list-unstyled float-end me-0">
                        <li><?php echo $subtotal?><i class="fas fa-dollar-sign"></i>
                        </li>
                        <li>  12%</li>
                        <li><?php echo $total?><i class="fas fa-dollar-sign"></i></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-8" style="margin-left:60px">
                    <p class="float-end"
                        style="font-size: 30px; color: red; font-weight: 400;font-family: Arial, Helvetica, sans-serif;">
                        Total:
                        <span><i class="fas fa-dollar-sign"></i> <?php echo $total?></span>
                    </p>
                </div>

            </div>
            <a href="FrontEnd/paginaPrincipal.php"><button type="button" class="btn btn-warning">Página Principal</button></a>
            
                

        </div>



    </div>
    <div class="card-footer bg-black"></div>

</body>

</html>