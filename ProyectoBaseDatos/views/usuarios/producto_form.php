
<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form method="POST" id="Form"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre del libro</label>
<input type="text"  id="NombreLibro" name="NombreLibro" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Autor</label>
<input type="text"  id="Autor" name="Autor" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Año de Lanzamiento</label>
<input type="text"  id="añoLanzamiento" name="añoLanzamiento" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Fisico/Virtual</label>
<input type="number"  id="FisicoVirtual" name="FisicoVirtual" class="form-control" required>
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias</label>
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
</div>
<!-- <div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div> 
</div> -->

<div class="mb-3">
<a href="index.php"><button type = "button" id="btnSubmit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>

<script>
    