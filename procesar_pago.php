<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306"; // Cambiar si es necesario
$username = "root"; // Nombre de usuario de la base de datos
$password = "teamo123"; // Contraseña de la base de datos
$dbname = "pagos_matricula"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtener datos del formulario y asegurarlos
$nombreTarjeta = mysqli_real_escape_string($conn, $_POST['nombreTarjeta']);
$numeroTarjeta = mysqli_real_escape_string($conn, $_POST['numeroTarjeta']);
$fechaExpiracion = mysqli_real_escape_string($conn, $_POST['fechaExpiracion']);
$cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
$monto = mysqli_real_escape_string($conn, $_POST['monto']);

// Preparar la consulta SQL para insertar datos del pago
$sql = "INSERT INTO sistemapagos (nombre_tarjeta, numero_tarjeta, fecha_expiracion, cvv, monto)
        VALUES ('$nombreTarjeta', '$numeroTarjeta', '$fechaExpiracion', '$cvv', '$monto')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página de datos_usuario_alumno.php después de procesar el pago
    header("Location: matriculaestudiantes.php");
    exit();
} else {
     // Si no se recibieron datos por POST, redirigir a la página de origen
     header("Location: index.html");
     exit();
 }

// Cerrar conexión
$conn->close();
?>
