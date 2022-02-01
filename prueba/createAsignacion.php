<?php

$mysqli = new mysqli("localhost", "root", "", "hospital");

$id_medico = $_REQUEST['id_medico'];
$id_paciente = $_REQUEST['id_paciente'];
$tratamiento = $_REQUEST['tratamiento'];
$cama =  $_REQUEST['cama'];
$diagnostico = $_REQUEST['diagnostico'];
$malestar = $_REQUEST['malestar'];

$sql = "INSERT INTO asignacion_medicos (medico_id, n_cama, diagnostico, gravedad_malestar, paciente_id) VALUES ($id_medico,  $cama, '$diagnostico', '$malestar', $id_paciente);";
if(mysqli_query($mysqli, $sql)){
    echo "Guardado correctamente";
} else {
    echo "ERROR: Ha ocurrido un error al registrar $sql. " . mysqli_error($link);
}

?>
