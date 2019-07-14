<?php 
include("includes/header.php");
include("db/productos.php");

$lista = getProductos();
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertProducto">Insertar Producto</button>
<br />
<br />
<table id="productos" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Producto</th>
			<th>Categoria</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Stock</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($lista as $key => $value): ?>

			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['nombre']; ?></td>
				<td><?php echo $value['categoria']; ?></td>
				<td><?php echo $value['descrip']; ?></td>
				<td><?php echo $value['precio']; ?></td>
				<td><?php echo $value['stock']; ?></td>
				<td style="text-align: center;">
					<a href="updateProducto.php?id=<?php echo $value['id']; ?>" class="btn btn-info">
						<i class="fas fa-pen-alt"></i>
					</a>
				</td>
				<td style="text-align: center;">
					<a href="db/productos.php?accion=1&id=<?php echo $value['id']; ?>" class="btn btn-danger">
						<i class="fas fa-trash"></i>
					</a>
				</td>
			</tr>	

		<?php endforeach ?>


	</tbody>
</table>



<div class="modal fade" id="insertProducto" tabindex="-1" role="dialog" aria-labelledby="lblinsertarProducto" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lblinsertarProducto">Insertar Producto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="db/productos.php?accion=2" method="POST" >
					<div class="form-group">
						<label for="nomProducto" class="col-form-label">Nombre Producto:</label>
						<input type="text" class="form-control" id="nomProducto" name="nomProducto">
					</div>
					<div class="form-group">
						<label for="categoria" class="col-form-label">Categoria:</label>
						<input type="text" class="form-control" id="categoria" name="categoria">
					</div>
					<div class="form-group">
						<label for="descrip" class="col-form-label">Descripcion:</label>
						<input type="text" class="form-control" id="descrip" name="descrip">
					</div>
					<div class="form-group">
						<label for="precio" class="col-form-label">Precio:</label>
						<input type="number" class="form-control" id="precio" name="precio">
					</div>
					<div class="form-group">
						<label for="stock" class="col-form-label">Stock:</label>
						<input type="number" class="form-control" id="stock" name="stock">
					</div>
					<div>
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<?php
include("includes/footer.php");
?>
<script type="text/javascript">
	$(document).ready(
		function() {
			$('#productos').DataTable();
		}
		);
	$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var recipient = button.data('whatever') 
		  var modal = $(this)
		  modal.find('.modal-title').text('New message to ' + recipient)
		  modal.find('.modal-body input').val(recipient)
		})
</script>