<?php
require_once("../_db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $conexion = mysqli_connect("localhost", "root", "", "tienda");
    $consulta = "SELECT * FROM user WHERE correo = '$correo' AND password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        $_SESSION['correo'] = $correo;
        header('Location: ../../views/usuarios/index.php');
    } else {
        $error = "El correo o la contraseña son incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <form action="" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <h3 class="text-center">Iniciar sesión</h3>
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="text" name="correo" id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-md space" value="Ingresar">
                            </div>
                                <div id="register-link" class="text-right">
                                    <a href="registros.php" class="btn btn-primary space">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function validarCorreo() {
            var correo = document.getElementById('correo').value;
            var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!correo.match(correoRegex)) {
                alert('Por favor, ingrese un correo electrónico válido.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
