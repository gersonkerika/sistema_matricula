<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "teamo123";
$dbname = "alumnosmatriculas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtener datos del formulario y asegurarlos
$dniAlumno = mysqli_real_escape_string($conn, $_POST['dniAlumno']);
$nombreAlumno = mysqli_real_escape_string($conn, $_POST['nombreAlumno']);
$apellidosAlumno = mysqli_real_escape_string($conn, $_POST['apellidosAlumno']);
$edadAlumno = mysqli_real_escape_string($conn, $_POST['edadAlumno']);
$sexoAlumno = mysqli_real_escape_string($conn, $_POST['sexoAlumno']);
$montoPago = mysqli_real_escape_string($conn, $_POST['montoPago']);
$anio = mysqli_real_escape_string($conn, $_POST['anio']);
$seccion = mysqli_real_escape_string($conn, $_POST['seccion']);

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO datos (dni, nombre, apellidos, edad, sexo, monto_pago, anio, seccion)
        VALUES ('$dniAlumno', '$nombreAlumno', '$apellidosAlumno', $edadAlumno, '$sexoAlumno', $montoPago, '$anio', '$seccion')";

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del último registro insertado
    $last_id = $conn->insert_id;

    // Redirigir a la página de boleta con los datos de matrícula
    header("Location: boletadatosalumno.php?id=" . $last_id);
    exit();
} else {
    echo "Error al matricular al alumno: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
