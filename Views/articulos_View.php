

	<DIV class="col-12 text-center">
		
<h3>Articulos</h3>
	</DIV>
<div class="row">
		<div class="col-md-12 d-flex justify-content-end">			
		<button type='button' class="btn btn-success" data-toggle="modal" data-target="#modalCRUD" >Agregar</button>
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

<!----Modal para CRUD--->

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="modalCRUD" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Articulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        	<div class="form-group">
        		<label for="descripcion">Producto:</label>
    				<input type="text" class="form-control" id="descripcion" aria-describedby="descripcion" placeholder="Ingrese el Articulo">
    			<label for="costo">Costo:</label>
    				<input type="text" class="form-control" id="costo" aria-describedby="costo" placeholder="0.000">
    				<label for="precio">Precio de Venta:</label>
    				<input type="text" class="form-control" id="precio" aria-describedby="precio" placeholder="0.000">
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!----END Modal para CRUD--->