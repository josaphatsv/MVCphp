

	<DIV class="col-12 text-center">
		
<h3>Articulos</h3>
	</DIV>
<div class="row">
		<div class="col-md-12 d-flex justify-content-end">			
		<button type='button' class="btn btn-success" >Agregar</button>
		</div>
		<br/>
	<div class="col-md-12">

	<table id="tablaArticulos" class="display" style="width:100%">
		<thead>		
		
		<tr><th>Codigo</th><th>Nombre del Articulo</th><th>Precio</th><th>Accion</th></tr>
		</thead>
		<tbody>
			
		<?php 
			foreach ($listadoProductos as $row) {
				echo "<tr><td>".$row["idArticulo"]."</td><td>".$row["descripcion"]."</td><td>".$row["precioVenta"]."</td><td><button type='button' class='btn btn-outline-primary'>Editar</button><button type='button' class='btn btn-outline-danger'>Eliminar</button></td></tr>";
			}
		 ?>
		</tbody>
	</table>
	</div>
</div>

