<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "teamo123";
$dbname = "registro_profesores"; // Nombre de la base de datos para profesores

// Inicializar variables para mostrar los datos
$dni_mostrar = $nombre_mostrar = $apellidos_mostrar = $edad_mostrar = $sexo_mostrar = $direccion_mostrar = $distrito_mostrar = $titulo_mostrar = $materia_mostrar = $correo_mostrar = $celular_mostrar = '';

// Verificar si se ha pasado el parámetro 'dni'
if (isset($_GET['dni'])) {
    // Obtener el dni desde la URL
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

    if ($result->num_rows > 0) {
        // Mostrar los datos del profesor
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
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Profesor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="boleta.css">
</head>
<body>
    <h2>Datos del Profesor</h2>
    <div>
        <p><strong>DNI:</strong> <?php echo htmlspecialchars($dni_mostrar); ?></p>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre_mostrar); ?></p>
        <p><strong>Apellidos:</strong> <?php echo htmlspecialchars($apellidos_mostrar); ?></p>
        <p><strong>Edad:</strong> <?php echo htmlspecialchars($edad_mostrar); ?></p>
        <p><strong>Sexo:</strong> <?php echo htmlspecialchars($sexo_mostrar); ?></p>
        <p><strong>Dirección:</strong> <?php echo htmlspecialchars($direccion_mostrar); ?></p>
        <p><strong>Distrito:</strong> <?php echo htmlspecialchars($distrito_mostrar); ?></p>
        <p><strong>Título:</strong> <?php echo htmlspecialchars($titulo_mostrar); ?></p>
        <p><strong>Materia:</strong> <?php echo htmlspecialchars($materia_mostrar); ?></p>
        <p><strong>Correo Electrónico:</strong> <?php echo htmlspecialchars($correo_mostrar); ?></p>
        <p><strong>Celular:</strong> <?php echo htmlspecialchars($celular_mostrar); ?></p>
    </div>
</body>
</html>

