<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "teamo123";
$dbname = "registro_alumno";

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

    // Preparar la consulta SQL para obtener los datos del alumno
    $sql = "SELECT * FROM alumnos WHERE dni = '$dni'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos del alumno
        $row = $result->fetch_assoc();
        $dni_mostrar = $row['dni'];
        $nombre_mostrar = $row['nombre'];
        $apellidos_mostrar = $row['apellidos'];
        $edad_mostrar = $row['edad'];
        $sexo_mostrar = $row['sexo'];
        $direccion_mostrar = $row['direccion'];
        $apoderado_mostrar = $row['apoderado'];
        $celular_apoderado_mostrar = $row['celular_apoderado'];
    } else {
        echo "No se encontraron datos para el DNI proporcionado.";
    }

    // Cerrar conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="boleta.css">
</head>
<body style="background-color: rgb(2, 9, 103);">
    <div class="container">
        <div class="card mt-5" style="background-color: rgb(239, 228, 106); border: 2px solid rgb(95, 223, 152);">
            <div class="card-body">
                <h2 class="card-title text-center mb-4" style="color: rgb(16, 29, 40);">Datos del Alumno</h2>
                <div>
                    <p><strong>DNI:</strong> <?php echo $dni_mostrar; ?></p>
                    <p><strong>Nombre:</strong> <?php echo $nombre_mostrar; ?></p>
                    <p><strong>Apellidos:</strong> <?php echo $apellidos_mostrar; ?></p>
                    <p><strong>Edad:</strong> <?php echo $edad_mostrar; ?></p>
                    <p><strong>Sexo:</strong> <?php echo $sexo_mostrar; ?></p>
                    <p><strong>Dirección:</strong> <?php echo $direccion_mostrar; ?></p>
                    <p><strong>Apoderado:</strong> <?php echo $apoderado_mostrar; ?></p>
                    <p><strong>Celular del Apoderado:</strong> <?php echo $celular_apoderado_mostrar; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
