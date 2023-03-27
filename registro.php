<?php 
include "include/conexion.php";
include "include/ac1_registro.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Practica 2 || Registro</title>
</head>
<body>
    <div class="container m-o content-justify-center px-2">
        <div class="row text-center">
            <h1 class="text-success">Registro</h1>
        </div>
        <form id="registro" action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required>
        </div>
            </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="direccion" class="form-control" placeholder="Direccion"></textarea>
        </div>
            </div>
        
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="telefono" class="form-control" placeholder="55-55-55-55" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="date" name="fecha" class="form-control" placeholder="Apellidos" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="Registrarse" name="btn" class="btn btn-success">
        </div>
            </div>
        </form>
</body>
</html>