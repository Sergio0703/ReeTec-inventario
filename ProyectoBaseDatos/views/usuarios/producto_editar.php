<?php

$id = $_GET['id'];
require_once ("../../includes/_db.php");
$consulta = "SELECT * FROM productos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre del libro </label>
<input type="text"  id="NombreLibro" name="NombreLibro" value="<?php echo $productos ['NombreLibro']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Autor</label>
<input type="text"  id="Autor" name="Autor" value="<?php echo $productos ['Autor']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="añoLanzamiento" class="form-label">Año de lanzamiento</label>
            <input type="text" id="añoLanzamiento" name="añoLanzamiento" value="<?php echo $productos ['añoLanzamiento']; ?>"  class="form-control" pattern="[0-9]{4}" maxlength="4" required>
            <small class="text-muted">Ingrese un número de 4 dígitos.</small>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Fisica/Virtual</label>
<select name="FisicoVirtual" id="FisicoVirtual" value="<?php echo $productos ['FisicoVirtual']; ?>" class="form-control" required>
    <option>Fisico</option>
    <option>Virtual</option>
    <option>Ambas</option>
</select>
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="Drama">Drama</option>
    <option value="Novela">Novela</option>
    <option value="Infantiles">Infantiles</option>
    <option value="Desarrollo_personal">Desarrollo personal</option>
    <option value="Negocios">Negocios</option>
    <option value="Videojuegos">Videojuegos</option>
    <option value="Comics">Comics</option>
  </select>  
</div>
</div>
</div>

<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file"  name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="editar_producto">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>

<?php require '../../includes/_footer.php' ?>
</html>