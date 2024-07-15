<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes y Videos PHP</title>
    <style>
        /* Estilos básicos */
        body {
            background-image: url('images/Picture1.jpg'); /* Imagen de fondo */
            background-size: cover; /* Cubrir toda la pantalla */
            background-repeat: no-repeat; /* Sin repetición */
            background-attachment: fixed; /* Fondo fijo al hacer scroll */
            font-family: Arial, sans-serif; /* Familia de fuentes */
            margin: 0; /* Sin margen */
            padding: 0; /* Sin relleno */
            height: 100vh; /* Altura total de la ventana del navegador */
        }

        nav {
            background-color: #333;
            width: 100%;
            height: 120px; /* Ajusta la altura del menú según sea necesario */
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0;
            margin: 0;
            background-image: url('images/menu.jpg'); /* Imagen de fondo para el menú */
            background-size: cover; /* Cubrir todo el área del menú */
            background-repeat: no-repeat; /* Evitar repetición de la imagen */
        }
        nav img {
            display: none; /* Ocultar la etiqueta de imagen para la barra de menú */
        }
        .content {
            margin-top: 120px; /* Ajusta el margen superior para evitar que el contenido se solape con el menú */
            padding: 20px; /* Añade un padding para separar el contenido del borde */
        }
        .images-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .images-container img {
            width: 600px; /* Tamaño deseado para las imágenes */
            height: auto; /* Altura automática para mantener la proporción */
            margin: 10px;
        }
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .video-container video {
            width: 500px; /* Tamaño deseado para los videos */
            height: auto; /* Altura automática para mantener la proporción */
            margin: 10px;
        }
    </style>
</head>
<body>
    <!-- Barra de menú con imagen de fondo -->
    <nav>
    </nav>

    <!-- Contenedor principal de contenido -->
    <div class="content">
        <!-- Contenedor de imágenes -->
        <div class="images-container">
            <?php
            $images = [
                "images/1.jpg",
                "images/2.jpg",
                "images/3.jpg",
                "images/4.jpg",
                "images/5.jpg",
                "images/6.jpg",
                
            ];

            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Imagen">';
            }
            ?>
        </div>

        <!-- Contenedor de videos -->
        <div class="video-container">
            <!-- Añade tus videos aquí -->
            <video controls>
                <source src="video/video1.mp4" type="video/mp4">
                Tu navegador no soporta el elemento video.
            </video>
            <video controls>
                <source src="video/video2.mp4" type="video/mp4">
                Tu navegador no soporta el elemento video.
            </video>
            <video controls>
                <source src="video/video3.mp4" type="video/mp4">
                Tu navegador no soporta el elemento video.
            </video>
            
        </div>
    </div>
</body>
</html>
