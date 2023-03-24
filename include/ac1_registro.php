<?php
include "conexion.php";
if(isset($_POST['btn'])){
    $Nombre=$conexion->real_escape_string($_POST['nombre']);
    $Apellidos=$conexion->real_escape_string($_POST['apellido']);
    $Direccion=$conexion->real_escape_string($_POST['direccion']);
    $Telefono=$conexion->real_escape_string($_POST['telefono']);
    $Fecha=$conexion->real_escape_string($_POST['fecha']);
    $Email=$conexion->real_escape_string($_POST['email']);
    if($Nombre == "" || $Apellidos == "" || $Direccion == "" || $Telefono == "" || $Fecha == "" || $Email == ""){
        $alerta = "Alguno de tus datos estan vacios";
    }
    else{
        $inserta = "
        INSERT INTO usuarios(Nombre,	Apellidos,	Direccion,	Telefono,	Fecha_Nac,	Email) VALUES('$Nombre', '$Apellidos', '$Direccion', '$Telefono', '$Fecha', '$Email')";
        $registra = $conexion->query($inserta);
        if($registra>0){
            echo"Registro exitoso";
        }
        else{
            echo"Error al registrar";
        }
    }
}






?>