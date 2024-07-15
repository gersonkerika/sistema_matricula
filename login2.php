<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM usuario WHERE nombre_user = '$usuario' and contrasena_user = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		// Inicio de sesión exitoso
		echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
		header("Location: sistemamatricula.php");
        exit; // Aseguramos que el script se detenga después de redirigir
	} else {
		// Credenciales inválidas
		echo "por favor ingrese el usuario y contraseña correcta."."<br>";
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Página de inicio de sesión</title>
  <meta charset="UTF-8">
  <style>
      body {
    background-color: rgba(245, 236, 174, 0); 
    background-image: url('images/Picture1.jpg');
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: 'Lato', sans-serif;
    margin: 0;
}

    
    * {
      font-family: 'Lato', sans-serif;
      box-sizing: border-box;
    }

    form {
      width: 400px;
      padding: 2rem;
      background-color: rgba(239, 228, 106, 0);
      border-radius: 20px;
      color: rgb(16, 29, 40);
      border: 2px solid rgba(95, 223, 153, 0);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    label {
      color: rgb(10, 32, 51);
      font-size: 18px; 
      font-weight: 300;
      margin-bottom: 0.5rem;
    }

    input {
      display: block;
      border: 2px solid black;
      width: calc(100% - 20px); /* Ajuste para el borde */
      padding: 10px;
      margin: 10px 0;
      border-radius: 10px;
    }

    button {
      background-color: #e72709;
      color: white;
      border: none;
      width: 100%;
      border-radius: 5px;
      padding: 10px;
      margin-top: 1rem;
      cursor: pointer;
    }

    button:hover {
      background-color: rgb(9, 32, 202);
      color: #f1f1f1;
    }

    .mt-3 {
      text-align: center;
      margin-top: 1rem;
    }

    a {
      color: white;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Formulario de inicio de sesión -->
        <form action="login2.php" method="POST">
          <h2>Iniciar sesión</h2>

          <!-- Mostrar mensaje de error si existe -->
          <?php if(!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
          <?php endif; ?>

          <!-- Campo de entrada para el nombre de usuario -->
          <label>Nombre de usuario</label>
          <input type="text" class="form-control" name="nombre_user" placeholder="Nombre de usuario" required>

          <!-- Campo de entrada para la contraseña -->
          <label>Contraseña</label>
          <input type="password" class="form-control" name="contrasena_user" placeholder="Contraseña" required>

          <!-- Botón para enviar el formulario -->
          <button type="submit" class="btn btn-primary" name="login">Iniciar sesión</button>
        </form>
        <!-- Enlace para redirigir al formulario de registro -->
        <p class="mt-3">¿No tienes una cuenta? <a href="registro2.php">Regístrate aquí</a></p>
      </div>
    </div>
  </div>
</body>
</html>
