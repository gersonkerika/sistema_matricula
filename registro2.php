<!DOCTYPE html>
<html>
<head>
  <title>Página de registro</title>
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
      width: 600px;
      padding: 3rem;
      background-color: rgba(239, 228, 106, 0);
      border-radius: 20px;
      color: rgb(16, 29, 40);
      border: 2px solid rgba(234, 7, 7, 0);
    }

    h2 {
    /* Mantén el h2 sin estilos específicos para imagen de fondo */
    margin-bottom: 2rem; /* Ajuste el espacio debajo del título */
    text-align: center; /* Centra el texto dentro del contenedor */
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
      background-color: #ff0505;
      color: white;
      border: none;
      width: 100%;
      border-radius: 5px;
      padding: 10px;
      margin-top: 1rem;
      cursor: pointer;
    }

    button:hover {
      background-color: rgb(7, 7, 199);
      color: #ffffff;
    }

    .mt-3 {
      text-align: center;
      margin-top: 1rem;
    }

    a {
      color: white;
    }


  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Formulario de registro -->
        <form action="registro.php" method="POST">
          <h2>Regístrate</h2>
          <!-- Campo de entrada para el nombre de usuario -->
          <label>Nombre de usuario</label>
          <input type="text" class="form-control" name="nombre_user" placeholder="Nombre de usuario" required>

          <!-- Campo de entrada para la contraseña -->
          <label>Contraseña</label>
          <input type="password" class="form-control" name="contrasena_user" placeholder="Contraseña" required>

          <!-- Campo de entrada para el correo -->
          <label>Correo</label>
          <input type="email" class="form-control" name="correo_user" placeholder="Correo" required>

          <!-- Botón para enviar el formulario de registro -->
          <button type="submit" class="btn btn-primary" name="registro">Registrarse</button>
        </form>
        <!-- Enlace para redirigir al formulario de inicio de sesión -->
        <p class="mt-3">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
      </div>
    </div>
  </div>
</body>
</html>
