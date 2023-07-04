<?php
require_once("../_db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['registrar'])) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $password = trim($_POST['password']);
        $telefono = trim($_POST['telefono']);

        // Verificar que los campos no estén vacíos
        if (!empty($nombre) && !empty($correo) && !empty($password) && !empty($telefono)) {
            // Verificar si el correo o el teléfono ya están registrados
            $consulta = "SELECT * FROM user WHERE correo = '$correo' OR telefono = '$telefono'";
            $resultado = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($resultado) > 0) {
                echo "El correo o el teléfono ya están registrados. Por favor, utiliza otros datos.";
            } else {
                // Realizar el registro en la base de datos
                $consulta = "INSERT INTO user (nombre, correo, telefono, password)
                            VALUES ('$nombre', '$correo', '$telefono', '$password')";

                if (mysqli_query($conexion, $consulta)) {
                    header("Location: login.php");
                    exit();
                } else {
                    echo "Error al registrar el usuario: " . mysqli_error($conexion);
                }
            }
        } else {
            echo "Por favor, completa todos los campos";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <form action="" method="POST" onsubmit="return validarFormulario()">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center">Registrate</h3>
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo:</label><br>
                                    <input type="email" name="correo" id="correo" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="tel" id="telefono" name="telefono" class="form-control" maxlength="10" required>
                                    <input type="hidden" name="accion" value="insertar_usuarios">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="registrar" value="Registrar">
                                    <div class="mb-3">
                                        <center>
                                            <a href="login.php">Ir al inicio de sesión</a>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var telefono = document.getElementById("telefono").value;
            var correo = document.getElementById("correo").value;
            var telefonoRegex = /^[0-9]{10}$/;
            var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var nombreRegex = /^[a-zA-Z\s]+$/;
            var caracteresProhibidosRegex = /['"]/;

            // Validar campos vacíos
            if (nombre === "" || telefono === "" || correo === "") {
                alert("Por favor, rellene todos los campos.");
                return false;
            }

            // Validar nombre
            if (!nombre.match(nombreRegex)) {
                alert("El nombre solo debe contener letras y espacios.");
                return false;
            }

            // Validar teléfono
            if (!telefono.match(telefonoRegex)) {
                alert("El teléfono debe contener 10 dígitos numéricos.");
                return false;
            }

            // Validar correo
            if (!correo.match(correoRegex)) {
                alert("Ingrese un correo válido.");
                return false;
            }

            // Validar caracteres prohibidos
            if (nombre.match(caracteresProhibidosRegex) || telefono.match(caracteresProhibidosRegex) || correo.match(caracteresProhibidosRegex)) {
                alert("No se permiten caracteres especiales");
                return false;
            }

            return true;
        }
    </script>

</body>
</html>
