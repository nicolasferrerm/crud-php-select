<?php

$mysqli = new mysqli("localhost", "root", "", "hospital");

$name = $_REQUEST['name'];
$identificacion = $_REQUEST['identificacion'];
$type_identificacion = $_REQUEST['type_identificacion'];
$edad =  $_REQUEST['edad'];
$genero = $_REQUEST['genero'];
$temperatura = $_REQUEST['temperatura'];
$malestar = $_REQUEST['malestar'];
$fecha_ingreso = $_REQUEST['fecha_ingreso'];
$eps = $_REQUEST['eps'];

$sql = "INSERT INTO pacientes (nombre, identificacion, tipo_identificacion, edad, genero, temperatura, malestar_informado, fecha_ingreso, eps) VALUES ('$name',  $identificacion, '$type_identificacion', $edad, '$genero', $temperatura, '$malestar', '$fecha_ingreso', '$eps');";
if(mysqli_query($mysqli, $sql)){
    echo "Guardado correctamente";
} else {
    echo "ERROR: Ha ocurrido un error al registrar $sql. " . mysqli_error($link);
}

?>
