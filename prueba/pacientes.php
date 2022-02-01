<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registrar pacientes</title>
</head>
<body>
<form action="createPacientes.php" method="post">

  <div style="text-align: center;">

    <h1>Registrar paciente</h1>
    <p>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
    </p>

    <p>
        <label for="identificacion">Identificacion:</label>
        <input type="text" name="identificacion" id="identificacion">
    </p>

    <p>
      <label for="identificacion">Tipo de identificacion:</label>
      <select name="type_identificacion" id="type_identificacion">
        <option value="Cedula">Cedula</option>
        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
        <option value="Pasaporte">Pasaporte</option>
      </select>
    </p>

    <p>
        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad">
    </p>

    <p>
        <label for="genero">Genero:</label>
        <select name="genero" id="genero">
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
    </p>

    <p>
        <label for="temperatura">Temperatura:</label>
        <input type="text" name="temperatura" id="temperatura">
    </p>

    <p>
        <label for="malestar">Malestar:</label>
        <input type="text" name="malestar" id="malestar">
    </p>

    <p>
        <label for="fecha_ingreso">Fecha de ingreso:</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso">
    </p>

    <p>
        <label for="eps">Eps:</label>
        <input type="text" name="eps" id="eps">
    </p>

    <input type="submit" value="Registrar">
  </div>
</form>
</body>
</html>
