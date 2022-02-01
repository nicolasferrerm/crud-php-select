<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dar de alta al paciente</title>
</head>
<body>
<form action="alta.php" method="post">

  <div style="text-align: center;">

    <h1>Dar de alta al paciente</h1>
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
        <label for="fecha_salida">Fecha de salida:</label>
        <input type="date" name="fecha_salida" id="fecha_salida">
    </p>

    <p>
        <label for="identificacion">Identificacion:</label>
        <input type="text" name="identificacion" id="identificacion">
    </p>

    <p>
        <label for="tratamiento">Tratamiento realizado:</label>
        <input type="text" name="tratamiento" id="tratamiento">
    </p>

    <p>
        <label for="temperatura">Temperatura corporal:</label>
        <input type="text" name="temperatura" id="temperatura">
    </p>

    <p>
        <label for="acompañante">Acompañante:</label>
        <input type="text" name="acompañante" id="acompañante">
    </p>

    <p>
        <label for="receta">Receta medica:</label>
        <input type="text" name="receta" id="receta">
    </p>

    <input type="submit" value="Registrar">
  </div>
</form>
</body>
</html>
