<?php

session_start();
//echo $_SESSION['user'];

?>

<!DOCTYPE html>

<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    
<div class='row row-cols-1 row-cols-md-5 g-4'>

<?php
    include_once("../Peticiones/funciones.php");
    echo impresionControlada();
?>
  
</div>
</body>


<footer>


</footer>
</html>

