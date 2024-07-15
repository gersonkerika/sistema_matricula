<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pago</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        .payment-form {
            width: 400px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-form">
            <h2 class="text-center mb-4">Sistema de Pago</h2>
            <form action="procesar_pago.php" method="POST">
                <div class="form-group">
                    <label for="nombreTarjeta">Nombre en la Tarjeta:</label>
                    <input type="text" id="nombreTarjeta" name="nombreTarjeta" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="numeroTarjeta">Número de Tarjeta:</label>
                    <input type="text" id="numeroTarjeta" name="numeroTarjeta" class="form-control" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fechaExpiracion">Fecha de Expiración:</label>
                        <input type="text" id="fechaExpiracion" name="fechaExpiracion" class="form-control" placeholder="MM/AA" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" name="cvv" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="monto">Monto a Pagar:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" id="monto" name="monto" class="form-control" aria-label="Monto a Pagar" required>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-block">Pagar Ahora</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
