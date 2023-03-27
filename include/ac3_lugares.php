<?php
include "conexion.php";
if(isset($_POST['bot'])){
    $Nombre_lugar=$conexion->real_escape_string($_POST['nombre_1']);
    $Descrip= $conexion->real_escape_string($_POST['descripcin']);
    $Telefo=$conexion->real_escape_string($_POST['tel']);
    $Facebook=$conexion->real_escape_string($_POST['face']);
    $Horario=$conexion->real_escape_string($_POST['horario']);
    
    if($Nombre_lugar == "" || $Descrip == "" || $Telefo == "" || $Facebook == "" || $Horario == ""){
        $alerts = "Alguno de tus datos estan vacios";
    }
    else{
        $inserts = "
        INSERT INTO lugar(Nombre_Lugar,	Descripcion,	Telefono,	Facebook,	Horario) VALUES('$Nombre_lugar', '$Descrip', '$Telefo',  '$Facebook', '$Horario')";
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