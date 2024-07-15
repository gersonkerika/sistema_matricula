<?php
// Verificar si se ha enviado el formulario de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener usuario y contraseña del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Validar usuario y contraseña (simulación básica)
    if ($usuario === 'PROFESOR' && $contrasena === '123456') {
        // Aquí se simula un id_profesor, puedes obtenerlo de tu lógica de aplicación
        $id_profesor = 1; // Simulado, deberías obtenerlo de tu base de datos o lógica de aplicación

        // Redirigir a la página de datos del profesor con el id_profesor
        header("Location: registroprofesor.php?id_profesor=" . $id_profesor);
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Profesor</title>
    <link rel="stylesheet" href="loginprofesor.css">
</head>
<body>
    <div class="container">
        <h2>Registrar Profesor</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
