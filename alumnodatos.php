<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306"; // Cambiar el puerto solo si no estás usando el puerto predeterminado
$username = "root"; // Usuario de la base de datos (por defecto en XAMPP es root)
$password = "teamo123"; // Contraseña vacía, ya que en XAMPP el usuario 'root' no tiene contraseña por defecto
$dbname = "registro_alumno"; // Nombre de la base de datos que creaste

// Inicializar variables para mostrar los datos
$dni_mostrar = $nombre_mostrar = $apellido_mostrar = $edad_mostrar = $sexo_mostrar = $direccion_mostrar = $apoderado_mostrar = $celular_apoderado_mostrar = '';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    $apoderado = $_POST['apoderado'];
    $celular_apoderado = $_POST['celular_apoderado'];

    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO alumnos (dni, nombre, apellidos, edad, sexo, direccion, apoderado, celular_Apoderado)
            VALUES ($dni, '$nombre', '$apellido', $edad, '$sexo', '$direccion', '$apoderado', $celular_apoderado)";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a la página de visualización de datos
        header("Location: boletaalumno.php?dni=$dni");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Registro de Alumno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiles.css">
</head>
<body>
    <h2>Registro de Alumno</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br><br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <label for="apoderado">Apoderado:</label>
        <input type="text" id="apoderado" name="apoderado" required><br><br>
        
        <label for="celular_apoderado">Celular del Apoderado:</label>
        <input type="text" id="celular_apoderado" name="celular_apoderado" required><br><br>
        
        <input type="submit" value="Registrar">
        <input type="button" value="Cancelar" onclick="window.location.href='index.php';">
    </form>
</body>
</html>
