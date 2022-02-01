<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Asignar medico al paciente</title>
</head>
<body>
<form action="createAsignacion.php" method="post">

  <div style="text-align: center;">

    <h1>Asignar medico al paciente</h1>

    <p>
      <label for="id_medico">Medico:</label>
      <select name="id_medico" id="id_medico">
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "hospital");
        $sql = "SELECT * FROM medicos";
        $espacio = ' ';
        $query = $conexion -> query ($sql);
        while($valores = mysqli_fetch_array($query)){
           echo "<option value='".$valores['id']."'>".$valores['nombres'].$espacio.$valores['apellidos']."</option>";
        }
      ?>
      </select>
    </p>

    <p>
      <label for="id_paciente">Paciente:</label>
      <select name="id_paciente" id="id_paciente">
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "hospital");
        $sql = "SELECT * FROM pacientes";
        $query = $conexion -> query ($sql);
        while($valores = mysqli_fetch_array($query)){
           echo "<option value='".$valores['id']."'>".$valores['nombre']."</option>";
        }
      ?>
      </select>
    </p>

    <p>
        <label for="tratamiento">Tratamiento:</label>
        <input type="text" name="tratamiento" id="tratamiento">
    </p>

    <p>
        <label for="cama">N° Cama:</label>
        <input type="text" name="cama" id="cama">
    </p>

    <p>
        <label for="diagnostico">Diagnostico:</label>
        <input type="text" name="diagnostico" id="diagnostico">
    </p>

    <p>
        <label for="malestar">Gravedad del malestar:</label>
        <input type="text" name="malestar" id="malestar">
    </p>

    <input type="submit" value="Registrar">
  </div>
</form>
</body>
</html>
