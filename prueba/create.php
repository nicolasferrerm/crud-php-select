<?php

$mysqli = new mysqli("localhost", "root", "", "hospital");

$name = $_REQUEST['name'];
$apell =  $_REQUEST['last_name'];
$identificacion = $_REQUEST['identificacion'];
$direccion = $_REQUEST['direccion'];
$telefono =  $_REQUEST['telefono'];
$barrio = $_REQUEST['barrio'];

$sql = "INSERT INTO medicos (nombres, apellidos, identificacion, direccion, telefono, barrio) VALUES ('$name', '$apell', $identificacion, '$direccion', $telefono, '$barrio');";
if(mysqli_query($mysqli, $sql)){
    echo "Guardado correctamente";
} else {
    echo "ERROR: Ha ocurrido un error al registrar";
}

?>
