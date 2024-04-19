<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT id_usuario FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        // Si las credenciales son válidas, redirigir a la página home.php
        header("Location: home.php");
        exit();
    } else {
        // Si las credenciales no son válidas, mostrar un mensaje de error
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="usuario" required>
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label for="remember"><input type="checkbox" name="remember" id="remember">Remember Me  <a href="#">Forget Password</a></label>
                    </div>
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account <a href="#">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

