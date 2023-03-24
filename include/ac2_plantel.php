<?php
include "conexion.php";
if(isset($_POST['bot'])){
    $Nombre_plantel=$conexion->real_escape_string($_POST['NombrePlantel']);
    $Clave_plantel=$conexion->real_escape_string($_POST['clave_plantel']);
    $Direcc=$conexion->real_escape_string($_POST['direccion']);
    $Telefon=$conexion->real_escape_string($_POST['telefono']);
    $Responsable=$conexion->real_escape_string($_POST['respon']);
    
    if($Nombre_plantel == "" || $Clave_plantel == "" || $Direcc == "" || $Telefon == "" || $Responsable == ""){
        $alert = "Alguno de tus datos estan vacios";
    }
    else{
        $insert = "
        INSERT INTO plantel(Nombre_Plantel, Clave_Plantel,	Direcion,	Telefono,	Responsable) VALUES('$Nombre_plantel', '$Clave_plantel', '$Direcc', '$Telefon', '$Responsable')";
        $regist = $conexion->query($insert);
        if($regist>0){
            echo"Registro exitoso";
        }
        else{
            echo"Error al registrar";
        }
    }
}

?>