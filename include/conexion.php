<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "proyectone";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
if($conexion->connect_error){
    die("Error al conectar la bd". $conexion->connect_error);
}

?>