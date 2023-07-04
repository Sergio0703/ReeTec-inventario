<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Usuarios</title>
</head>
<body>

<div class="container">
  <div class="col-sm-6 offset-3 mt-5">
    <form id="formulario" action="../../includes/_functions.php" method="POST">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control">
        <div id="errorNombre" class="error-msg"></div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input type="email" id="correo" name="correo" class="form-control">
            <div id="errorCorreo" class="error-msg"></div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control">
            <div id="errorPassword" class="error-msg"></div>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" class="form-control">
        <div id="errorTelefono" class="error-msg"></div>
      </div>

      <div class="mb-3">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </form>
  </div>
</div>

<script>
  function validarFormulario() {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var password = document.getElementById('password').value;
    var telefono = document.getElementById('telefono').value;

    var errores = 0;
    var errorNombre = document.getElementById('errorNombre');
    var errorCorreo = document.getElementById('errorCorreo');
    var errorPassword = document.getElementById('errorPassword');
    var errorTelefono = document.getElementById('errorTelefono');

    errorNombre.innerHTML = '';
    errorCorreo.innerHTML = '';
    errorPassword.innerHTML = '';
    errorTelefono.innerHTML = '';

    if (nombre.trim() === '') {
      errorNombre.innerHTML = 'El nombre es obligatorio.';
      errores++;
    }

    if (correo.trim() === '') {
      errorCorreo.innerHTML = 'El correo electrónico es obligatorio.';
      errores++;
    }

    if (password.trim() === '') {
      errorPassword.innerHTML = 'La contraseña es obligatoria.';
      errores++;
    }

    if (telefono.trim() === '') {
      errorTelefono.innerHTML = 'El teléfono es obligatorio.';
      errores++;
    } else if (!/^(\d{1,10})$/.test(telefono)) {
      errorTelefono.innerHTML = 'El teléfono debe contener solo números y tener un máximo de 10 dígitos.';
      errores++;
    }

    if (errores > 0) {
      return false;
    }
  }

  var formulario = document.getElementById('formulario');
  formulario.addEventListener('submit', validarFormulario);
</script>

</body>
</html>
