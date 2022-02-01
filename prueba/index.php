<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registrar medico</title>
</head>
<body>
<form action="create.php" method="post">

  <div style="text-align: center;">

    <h1>Registrar medico</h1>
    <p>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="last_name">Apellido:</label>
        <input type="text" name="last_name" id="last_name">
    </p>
    <p>
        <label for="identificacion">Identificacion:</label>
        <input type="text" name="identificacion" id="identificacion">
    </p>
    <p>
        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion">
    </p>
    <p>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono">
    </p>
    <p>
        <label for="barrio">Barrio:</label>
        <input type="text" name="barrio" id="barrio">
    </p>
    <input type="submit" value="Registrar">
  </div>
</form>
</body>
</html>
