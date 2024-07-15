<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Matrícula</title>
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

        .card-header {
            background-color: #007bff; /* Color de fondo del encabezado */
            color: white; /* Color del texto */
            text-align: center; /* Alineación centrada del texto */
            font-weight: bold; /* Texto en negrita */
            padding: 20px; /* Ajuste de relleno */
            border-radius: 20px 20px 0 0; /* Bordes redondeados */
            font-size: 24px; /* Tamaño del texto del encabezado */
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Boleta de Matrícula
                    </div>
                    <div class="card-body">
                        <?php
                        // Obtener el ID del alumno desde la URL
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            // Consultar la base de datos para obtener los datos del alumno
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

                            // Consulta SQL para obtener los datos del alumno por ID
                            $sql = "SELECT * FROM datos WHERE id = $id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Mostrar los datos del alumno
                                $row = $result->fetch_assoc();
                                echo "<p><strong>DNI:</strong> " . $row['dni'] . "</p>";
                                echo "<p><strong>Nombre:</strong> " . $row['nombre'] . "</p>";
                                echo "<p><strong>Apellidos:</strong> " . $row['apellidos'] . "</p>";
                                echo "<p><strong>Edad:</strong> " . $row['edad'] . "</p>";
                                echo "<p><strong>Sexo:</strong> " . $row['sexo'] . "</p>";
                                echo "<p><strong>Monto Pago:</strong> $" . $row['monto_pago'] . "</p>";
                                echo "<p><strong>Año:</strong> " . $row['anio'] . "</p>";
                                echo "<p><strong>Sección:</strong> " . $row['seccion'] . "</p>";
                                echo "<p><strong>Fecha de Matrícula:</strong> " . $row['fecha_matricula'] . "</p>";
                            } else {
                                echo "No se encontraron datos de matrícula.";
                            }

                            // Cerrar conexión
                            $conn->close();
                        } else {
                            echo "No se especificó un ID válido.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón de Descargar Boleta -->
    <div class="form-group text-center">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo '<a id="btnDescargar" class="btn btn-secondary btn-block" href="descargarboleta.php?id=' . $id . '" download>Descargar Boleta</a>';
        }
        ?>
    </div>

</body>
</html>
