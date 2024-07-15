<?php
// Verificar que se haya enviado el ID válido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conectar a la base de datos y obtener la ruta de la imagen de la boleta según el ID
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

    // Consulta SQL para obtener la ruta de la imagen de la boleta por ID
    $sql = "SELECT imagen_boleta FROM datos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Obtener la ruta de la imagen de la boleta
        $row = $result->fetch_assoc();
        $imagen_boleta = $row['imagen_boleta'];

        // Ruta completa al archivo de la boleta (reemplaza esta ruta con la correcta)
        $ruta_completa = 'C:\Users\user\Downloads' . $imagen_boleta;

        // Verificar si el archivo existe
        if (file_exists($ruta_completa)) {
            // Configurar las cabeceras para la descarga
            header('Content-Description: File Transfer');
            header('Content-Type: image/jpeg'); // Tipo de contenido JPEG
            header('Content-Disposition: attachment; filename="' . basename($ruta_completa) . 'C:\Users\user\Downloads');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($ruta_completa));
            readfile($ruta_completa);
            exit;
        } else {
            // Si el archivo no existe
            die('Error: El archivo no existe en el servidor.');
        }
    } else {
        // Si no se encontraron datos de matrícula
        die('Error: No se encontraron datos de matrícula para el ID especificado.');
    }

    // Cerrar conexión
    $conn->close();
} else {
    // Si no se especificó un ID válido
    die('Error: No se especificó un ID válido.');
}
?>
