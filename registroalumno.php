<?php
// Establecer conexión con la base de datos
$servername = "localhost:3306"; // Cambiar el puerto si es necesario
$username = "root"; // Usuario de la base de datos
$password = "teamo123"; // Contraseña (por defecto en XAMPP es vacía)
$dbname = "registro_alumno"; // Nombre de la base de datos

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Obtener datos del formulario y asegurarlos
    $dni = mysqli_real_escape_string($conn, $_POST['dni']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($conn, $_POST['apellidos']);
    $edad = mysqli_real_escape_string($conn, $_POST['edad']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
    $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);
    $apoderado = mysqli_real_escape_string($conn, $_POST['apoderado']);
    $celular_apoderado = mysqli_real_escape_string($conn, $_POST['celular_apoderado']);

    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO alumnos (dni, nombre, apellidos, edad, sexo, direccion, apoderado, celular_apoderado)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssissss", $dni, $nombre, $apellidos, $edad, $sexo, $direccion, $apoderado, $celular_apoderado);

    if ($stmt->execute()) {
        // Redirigir a la página de visualización de datos del alumno registrado
        header("Location: boletaalumno.php?dni=$dni");
        exit();
    } else {
        echo "Error al insertar registro: " . $stmt->error;
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
    <title>Registro de Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            background-color: rgb(245, 235, 174); /* Color de fondo */
            background-image: url('images/Picture1.jpg'); /* Imagen de fondo */
            background-size: cover; /* Ajuste para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evitar repetición de la imagen */
            background-attachment: fixed; /* Fondo fijo al hacer scroll */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh; /* Tamaño completo de la pantalla */
            font-family: 'Lato', sans-serif;
            margin: 0;
        }

        .card {
            width: 600px;
            margin: 0 auto; /* Centra horizontalmente */
            margin-top: 50px; /* Ajuste para centrar verticalmente */
            border-radius: 20px;
            background-image: url('images/Picture1.jpg'); /* Imagen de fondo */
            background-size: cover; /* Ajuste para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evitar repetición de la imagen */
            background-position: center; /* Centrar la imagen */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .card-title {
            background-color: transparent; /* Fondo transparente */
            border-bottom: none; /* Sin borde inferior */
            padding: 1rem 0;
            border-radius: 20px 20px 0 0;
            text-align: center; /* Alineación centrada del título */
            color: rgb(16, 29, 40); /* Color del texto del título */
            margin-bottom: 0; /* Elimina el margen inferior */
            font-size: 28px; /* Tamaño del texto del título */
        }

        .card-body {
            background-color: transparent; /* Fondo transparente */
            color: rgb(16, 29, 40); /* Color de texto */
            border-radius: 0 0 20px 20px;
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            border: none; /* Elimina el borde de los campos */
            border-bottom: 2px solid rgba(0, 0, 0, 0.2); /* Borde inferior */
            border-radius: 0; /* Elimina el redondeo del borde inferior */
            background-color: rgba(255, 255, 255, 0.5); /* Color de fondo con transparencia */
            box-shadow: none; /* Sin sombra */
        }

        .form-control:focus {
            border-color: rgba(0, 0, 0, 0.3); /* Cambia el color del borde al enfocar */
            background-color: rgba(255, 255, 255, 0.7); /* Color de fondo más claro al enfocar */
        }

        .btn-primary {
            background-color: #007bff; /* Color de fondo del botón primario */
            border: none; /* Sin borde */
            border-radius: 5px; /* Borde redondeado */
            padding: 10px 20px; /* Ajuste de relleno */
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #f13800; /* Color de fondo al pasar el ratón */
        }

        .btn-secondary {
            background-color: #6c757d; /* Color de fondo del botón secundario */
            border: none; /* Sin borde */
            border-radius: 5px; /* Borde redondeado */
            padding: 10px 20px; /* Ajuste de relleno */
            cursor: pointer;
        }

        .btn-secondary:hover {
            background-color: #f13800; /* Color de fondo al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title mb-4">Registro de Alumno</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input type="text" id="dni" name="dni" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" id="edad" name="edad" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo" class="form-control" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apoderado">Apoderado:</label>
                        <input type="text" id="apoderado" name="apoderado" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="celular_apoderado">Celular del Apoderado:</label>
                        <input type="text" id="celular_apoderado" name="celular_apoderado" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <input type="button" class="btn btn-secondary" value="Cancelar" onclick="window.location.href='index.php';">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
