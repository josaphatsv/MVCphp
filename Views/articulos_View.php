<!DOCTYPE html>
<html>
<head>
	<title>Articulos</title>
</head>
<body>
	<table>
		<tr>
		<th colspan="3">Articulos</th>			
		</tr>
		<tr><th>Codigo</th><th>Nombre del Articulo</th><th>Precio</th></tr>
		<tr><td></td><td></td><td></td></tr>
		<?php 
			foreach ($listadoProductos as $row) {
				echo "<tr><td>".$row["idArticulo"]."</td><td>".$row["descripcion"]."</td><td>".$row["precioVenta"]."</td></tr>";
			}
		 ?>
	</table>

</body>
</html>