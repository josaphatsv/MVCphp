<h2><?php echo $articulo->id!= null ? $articulo->Descripcion : 'Agregar Articulo'; ?></h2>

<form>
        	<div class="form-group">
        		<input type="hidden" name="id" value="<?php echo $articulo->id; ?>">
        		<label for="descripcion">Producto:</label>
    				<input type="text" class="form-control" id="descripcion" aria-describedby="descripcion" placeholder="Ingrese el Articulo" value="<?php echo $articulo->descripcion; ?>">
    			<label for="costo">Costo:</label>
    				<input type="text" class="form-control" id="costo" aria-describedby="costo" placeholder="0.000" value="<?php echo $articulo->costo; ?>">
    				<label for="precio">Precio de Venta:</label>
    				<input type="text" class="form-control" id="precio" aria-describedby="precio" placeholder="0.000" value="<?php echo $articulo->precio; ?>" >
        	</div>
        	<hr/>
        	<div class="text-right">
        		<button class="btn btn-success" type="submit"><?php echo $articulo->id!= null ? "Editar" : 'Guardar'; ?></button>
        	</div>
        </form>