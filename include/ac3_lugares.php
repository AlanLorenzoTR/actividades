<?php
include "conexion.php";
if(isset($_POST['bot'])){
    $Nombre_lugar=$conexion->real_escape_string($_POST['nombre_1']);
    $Direc=$conexion->real_escape_string($_POST['direcci']);
    $Telefo=$conexion->real_escape_string($_POST['telefo']);
    $Corre=$conexion->real_escape_string($_POST['emai']);
    $Facebook=$conexion->real_escape_string($_POST['face']);
    $Horario=$conexion->real_escape_string($_POST['horario']);
    
    if($Nombre_lugar == "" || $Direc == "" || $Telefo == "" || $Corre == "" || $Facebook == "" || $Horario == ""){
        $alerts = "Alguno de tus datos estan vacios";
    }
    else{
        $inserts = "
        INSERT INTO plantel(Nombre_Lugar,	Descripcion,	Telefono,	Facebook,	Horario) VALUES('$Nombre_lugar', '$Direc', '$Telefo', '$Corre', '$Facebook', '$Horario')";
        $regists = $conexion->query($inserts);
        if($regists>0){
            echo"Registro exitoso";
        }
        else{
            echo"Error al registrar";
        }
    }
}

?>