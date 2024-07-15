<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
</head>
<body>
  <h2>Iniciar Sesión</h2>
  <form action="registro2.php" method="POST">
    <label for="usuario">Usuario:</label><br>
    <input type="text" id="usuario" name="usuario" required><br>

    <label for="contrasena">Contraseña:</label><br>
    <input type="password" id="contrasena" name="contrasena" required><br>

    <button type="submit">Iniciar Sesión</button>
    <a href="crearcuenta.php">Crear Cuenta</a>
  </form>
</body>
</html>
