<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JESUS EL BUEN SEMBRADOR</title>
    <link rel="stylesheet" href="principal.css">
    <style>
         body {
            background-image: url('images/Picture1.jpg'); /* Imagen de fondo */
            background-size: cover; /* Cubrir toda la pantalla */
            background-repeat: no-repeat; /* Sin repetición */
            background-attachment: fixed; /* Fondo fijo al hacer scroll */
            font-family: Arial, sans-serif; /* Familia de fuentes */
            margin: 0; /* Sin margen */
            padding: 0; /* Sin relleno */
            position: relative; /* Posición relativa para poder posicionar la imagen pequeña */
            height: 100vh; /* Altura total de la ventana del navegador */
        }

        .menu {
            background-image: url('images/menu.jpg'); /* Ruta de la imagen de fondo para el menú */
            background-size: cover; /* Ajustar tamaño para cubrir todo el contenedor del menú */
            background-repeat: no-repeat; /* Evitar repetición de la imagen */
            padding: 20px; /* Añadir espacio interno al menú */
            text-align: center; /* Alinear texto centrado en el menú */
            color: white; /* Color de texto para el menú */
            margin-bottom: 20px; /* Espacio inferior del menú */
            position: relative; /* Establecer posición relativa */
            z-index: 1; /* Asegurar que el menú esté sobre la imagen */
        }

        .menu h1 {
            margin-top: 0; /* Eliminar margen superior del título */
        }

        .menu ul {
            list-style-type: none; /* Eliminar viñetas de la lista */
            padding: 0; /* Eliminar padding de la lista */
            margin: 0; /* Eliminar margen de la lista */
        }

        .menu ul li {
            display: inline; /* Mostrar elementos de la lista en línea */
            margin-right: 20px; /* Espacio entre elementos de la lista */
        }

        .menu ul li a {
            color: white; /* Color de texto para los enlaces */
            text-decoration: none; /* Eliminar subrayado de los enlaces */
            font-size: 18px; /* Tamaño de fuente para los enlaces */
        }

        .menu ul li a:hover {
            text-decoration: underline; /* Subrayar enlaces al pasar el ratón */
        }

        .small-image {
    background-image: url('fondos/nosotros.jpg'); /* Ruta de la imagen pequeña */
    background-size: cover; /* Ajustar tamaño para cubrir el contenedor */
    background-repeat: no-repeat; /* Evitar repetición de la imagen */
    width: 653px; /* Ancho deseado para la imagen pequeña */
    height: 400px; /* Altura deseada para la imagen pequeña */
    position: absolute; /* Posición absoluta para que se coloque en una posición específica */
    bottom: 20px; /* Distancia desde la parte inferior de la página */
    left: 50%; /* Centrar horizontalmente */
    transform: translateX(-50%); /* Ajustar centrado horizontal usando transformación */
    border-radius: 0; /* Eliminar el borde redondeado para que sea cuadrada */
    z-index: 0; /* Asegurar que la imagen pequeña esté detrás del contenido */
}
.additional-image {
    position: absolute; /* Posición absoluta para que se coloque en una posición específica */
    top: -20px; /* Ajustar posición desde arriba */
    right: 0px; /* Ajustar posición desde la derecha */
    z-index: 2; /* Asegurar que esté sobre el menú */
    width: 150px; /* Ancho deseado para la imagen adicional */
    height: auto; /* Altura automática para mantener la proporción */
}

</style>
</head>
<body>
    <div class="menu">
        <div class="additional-image">
        <img src="images/12.png" alt="Imagen Adicional" style="width: 100%; height: 100%;">
        </div>
        <h1>SISTEMA DE MATRICULA JESUS EL BUEN SEMBRADOR</h1>
        <ul>
            <li><a href="nosotros.php">MAS DE NOSOTROS</a></li>
            <li><a href="loginalumno.php">REGISTRAR ALUMNO</a></li>
            <li><a href="loginprofesor.php">REGISTRAR PROFESOR</a></li>
            <li><a href="registro2.php">REGISTRO MATRICULA</a></li>
            <li><a href="reportes.php">REPORTE</a></li>
        </ul>
    </div>

    <div class="small-image"></div>

    <!-- Aquí puedes agregar más contenido HTML o PHP según sea necesario -->

</body>
</html>
