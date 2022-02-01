<?php

$mysqli = new mysqli("localhost", "root", "", "hospital");

$id_paciente = $_REQUEST['id_paciente'];
$fecha_salida = $_REQUEST['fecha_salida'];
$identificacion =  $_REQUEST['identificacion'];
$tratamiento = $_REQUEST['tratamiento'];
$temperatura = $_REQUEST['temperatura'];
$acompañante = $_REQUEST['acompañante'];
$receta = $_REQUEST['receta'];

$sql = "INSERT INTO alta_paciente (fecha_salida, tratamiento_realizado, temperatura, acompanante, receta_medica, paciente_id) VALUES ('$fecha_salida', '$tratamiento', $temperatura, '$acompañante', '$receta', $id_paciente);";
if(mysqli_query($mysqli, $sql)){
    echo "Guardado correctamente";
} else {
    echo "ERROR: Ha ocurrido un error al registrar $sql. " . mysqli_error($link);
}

?>
