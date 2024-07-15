<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="alumni1.css">
</head>
<body>
    <div class="container">
        <form action="validarloginalumno.php" method="POST">
            <h2>Ingrese Usuario Y Contraseña Para Registro De Alumno</h2>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            
            <input type="submit" value="Aceptar">
            <input type="button" value="Cancelar" onclick="window.location.href='index.php';">
        </form>
    </div>
</body>
</html>
