<?php
session_start(); // Iniciar sesión para manejar variables de sesión

// Verificar si se enviaron datos de usuario y contraseña
if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    // Aquí deberías realizar la validación del usuario y contraseña
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Ejemplo de validación básica (reemplazar con tu lógica de validación real)
    if ($usuario === 'ALUMNO' && $contrasena === '123456') {
        // Guardar información de sesión si es necesario
        $_SESSION['usuario'] = $usuario;

        // Redirigir al formulario de registro de alumno
        header('Location: registroalumno.php');
        exit;
    } else {
        // Redirigir de vuelta al login si el usuario y contraseña no son válidos
        header('Location: loginalumno.php');
        exit;
    }
} else {
    // Redirigir de vuelta al login si no se enviaron datos de usuario y contraseña
    header('Location: loginalumno.php');
    exit;
}
?>

