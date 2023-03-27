<?php 
include "include/conexion.php";
include "include/ac2_plantel.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Practica 3 || Plantel</title>
</head>
<body>
    <div class="container m-o content-justify-center px-2">
        <div class="row text-center">
            <h1 class="text-success">Plantel</h1>
        </div>
        <form id="registro" action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="nombre_plantel" class="form-control" placeholder="Nombre del Plantel" required>
        </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="clave_plantel" class="form-control" placeholder="Clave del Plantel" required>
        </div>
            </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="direcc" class="form-control" placeholder="Direccion"></textarea>
        </div>
            </div>
        
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="telefon" class="form-control" placeholder="55-55-55-55" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="date" name="respon" class="form-control" placeholder="Responsable" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="Registrarse" name="bot" class="btn btn-danger">
        </div>
            </div>
        </form>
</body>
</html>