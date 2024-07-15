<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Alumno</title>
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
                        Datos de Alumno
                    </div>
                    <div class="card-body">
                        <form action="guardardatosalumno.php" method="POST">
                            <div class="form-group">
                                <label for="dniAlumno">DNI:</label>
                                <input type="text" id="dniAlumno" name="dniAlumno" class="form-control" value="87654321">
                            </div>
                            <div class="form-group">
                                <label for="nombreAlumno">Nombre:</label>
                                <input type="text" id="nombreAlumno" name="nombreAlumno" class="form-control" value="María">
                            </div>
                            <div class="form-group">
                                <label for="apellidosAlumno">Apellidos:</label>
                                <input type="text" id="apellidosAlumno" name="apellidosAlumno" class="form-control" value="López">
                            </div>
                            <div class="form-group">
                                <label for="edadAlumno">Edad:</label>
                                <input type="text" id="edadAlumno" name="edadAlumno" class="form-control" value="20">
                            </div>
                            <div class="form-group">
                                <label for="sexoAlumno">Sexo:</label>
                                <input type="text" id="sexoAlumno" name="sexoAlumno" class="form-control" value="Femenino">
                            </div>
                            <div class="form-group">
                                <label for="montoPago">Pago:</label>
                                <input type="text" id="montoPago" name="montoPago" class="form-control" value="<?php echo isset($_POST['monto']) ? $_POST['monto'] : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="anio">Año:</label>
                                <input type="text" id="anio" name="anio" class="form-control" value="<?php echo isset($_POST['anio']) ? $_POST['anio'] : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="seccion">Sección:</label>
                                <input type="text" id="seccion" name="seccion" class="form-control" value="<?php echo isset($_POST['seccion']) ? $_POST['seccion'] : ''; ?>">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-block">MATRICULAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
