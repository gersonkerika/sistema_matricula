<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306"; // Cambiar el puerto solo si no estás usando el puerto predeterminado
$username = "root"; // Usuario de la base de datos (por defecto en XAMPP es root)
$password = "teamo123"; // Contraseña vacía, ya que en XAMPP el usuario 'root' no tiene contraseña por defecto
$dbname = "registro_profesor"; // Nombre de la base de datos para profesores

// Inicializar variables para mostrar los datos
$dni_mostrar = $nombre_mostrar = $apellidos_mostrar = $edad_mostrar = $sexo_mostrar = $direccion_mostrar = $distrito_mostrar = $titulo_mostrar = $materia_mostrar = $correo_mostrar = $celular_mostrar = '';

// Verificar si se ha enviado el DNI
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para obtener los datos del profesor
    $sql = "SELECT * FROM profesores WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se obtuvo algún resultado
    if ($result->num_rows > 0) {
        // Obtener los datos del profesor
        $row = $result->fetch_assoc();
        $dni_mostrar = $row['dni'];
        $nombre_mostrar = $row['nombre'];
        $apellidos_mostrar = $row['apellidos'];
        $edad_mostrar = $row['edad'];
        $sexo_mostrar = $row['sexo'];
        $direccion_mostrar = $row['direccion'];
        $distrito_mostrar = $row['distrito'];
        $titulo_mostrar = $row['titulo'];
        $materia_mostrar = $row['materia'];
        $correo_mostrar = $row['correo'];
        $celular_mostrar = $row['celular'];
    } else {
        echo "No se encontraron datos para el DNI proporcionado.";
    }

    // Cerrar conexión
    $stmt->close();
    $conn->close();
} else {
    echo "DNI no proporcionado.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Profesor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiles.css">
</head>
<body>
    <h2>Datos del Profesor</h2>
    <table>
        <tr>
            <th>DNI:</th>
            <td><?php echo htmlspecialchars($dni_mostrar); ?></td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td><?php echo htmlspecialchars($nombre_mostrar); ?></td>
        </tr>
        <tr>
            <th>Apellidos:</th>
            <td><?php echo htmlspecialchars($apellido_mostrar); ?></td>
        </tr>
        <tr>
            <th>Edad:</th>
            <td><?php echo htmlspecialchars($edad_mostrar); ?></td>
        </tr>
        <tr>
            <th>Sexo:</th>
            <td><?php echo htmlspecialchars($sexo_mostrar); ?></td>
        </tr>
        <tr>
            <th>Dirección:</th>
            <td><?php echo htmlspecialchars($direccion_mostrar); ?></td>
        </tr>
        <tr>
            <th>Distrito:</th>
            <td><?php echo htmlspecialchars($distrito_mostrar); ?></td>
        </tr>
        <tr>
            <th>Título:</th>
            <td><?php echo htmlspecialchars($titulo_mostrar); ?></td>
        </tr>
        <tr>
            <th>Materia:</th>
            <td><?php echo htmlspecialchars($materia_mostrar); ?></td>
        </tr>
        <tr>
            <th>Correo Electrónico:</th>
            <td><?php echo htmlspecialchars($correo_mostrar); ?></td>
        </tr>
        <tr>
            <th>Celular:</th>
            <td><?php echo htmlspecialchars($celular_mostrar); ?></td>
        </tr>
    </table>
    <br>
    <a href="index.php">Volver al Inicio</a>
</body>
</html>
