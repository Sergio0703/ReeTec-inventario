<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="NombreLibro" class="form-label">Nombre del libro</label>
<input type="text"  id="NombreLibro" name="NombreLibro" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="Autor" class="form-label">Autor</label>
<input type="text"  id="Autor" name="Autor" class="form-control" required >
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="añoLanzamiento" class="form-label">Año de lanzamiento</label>
            <input type="text" id="añoLanzamiento" name="añoLanzamiento" class="form-control" pattern="[0-9]{4}" maxlength="4" required>
            <small class="text-muted">Ingrese un número de 4 dígitos.</small>
        </div>
    </div>


<div class="col-sm-6">
<div class="mb-3">
<label for="FisicoVirtual" class="form-label">Fisico/Virtual</label>
<select name="FisicoVirtual" id="FisicoVirtual" class="form-control" required>
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
<label for="categorias" class="form-label">Categoria</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="Accion">Accion</option>
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


<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div>


<div class="mb-3">
<input type="hidden" name="accion" value="insertar_productos">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>

</body>

<?php 


require '../../../includes/_footer.php' 


?>


</html>


