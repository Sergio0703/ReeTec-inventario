<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'Accion'?>">
Accion
</a>
        </div>
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'Drama'?>">
Drama
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'Novela'?>">
Novela
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'Infantiles'?>">
Infantiles
</a>
</div>

<div class="col-sm-4">
<a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'Desarrollo_personal'?>">
Desarrollo personal
</a>
</div>
<div class="col-sm-4">
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'Negocios'?>">
Negocios
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'Videojuegos'?>">
Videojuegos
</a>
</div>
<div class="col-sm-4">
<a class="cattelefonia" href="productosCategoria.php?categoria=<?php echo 'Comics'?>">
Comics
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>