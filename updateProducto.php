<?php include ("includes/header.php") ?>
<?php include ("db/productos.php") ?>
<?php 

if ($_GET['id']) {
	$id = $_GET['id'];
	$res = getProducto($id);
}

 ?>

<form action="db/productos.php?accion=3&id=<?php echo $id; ?>" method="POST">
	
	<div class="form-group">
		<label for="nomProducto" class="col-form-label">Nombre Producto:</label>
		<input type="text" class="form-control" id="nomProducto" name="nomProducto" value="<?php echo $res[0]['nombre'] ?>">
	</div>
	<div class="form-group">
		<label for="categoria" class="col-form-label">Categoria:</label>
		<input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $res[0]['categoria'] ?>">
	</div>
	<div class="form-group">
		<label for="descrip" class="col-form-label">Descripcion:</label>
		<input type="text" class="form-control" id="descrip" name="descrip" value="<?php echo $res[0]['descrip'] ?>">
	</div>
	<div class="form-group">
		<label for="precio" class="col-form-label">Precio:</label>
		<input type="number" class="form-control" id="precio" name="precio" value="<?php echo $res[0]['precio'] ?>">
	</div>
	<div class="form-group">
		<label for="stock" class="col-form-label">Stock:</label>
		<input type="number" class="form-control" id="stock" name="stock" value="<?php echo $res[0]['stock'] ?>">
	</div>
	<div>
		<input type="submit" class="btn btn-primary" value="Guardar">
	</div>

</form>

<?php include ("includes/footer.php") ?>