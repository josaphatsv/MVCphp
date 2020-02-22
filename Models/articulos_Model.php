<?php 

/**
 *@autor Josaphat Lopez 
 *Modelo para Articulos
 */
class articulos_Model
{
	private $db;
	private $articulos;
	function __construct()
	{
		require_once("Models/dbConector.php");
		$this->db=dbConector::conexion();
		$this->articulos=array();

	}

	public function get_articulos(){
		$consulta=$this->db->query("SELECT * FROM articulos WHERE estado=1");
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			$this->articulos[]=$filas;
		}
		return $this->articulos;
	}

	public function ingresarArticulo($data)
	{

		try
		{
			$sql="INSERT INTO articulos (descripcion,costo,precioVenta) VALUES (?,?,?)";
			$this->db->prepare($sql)->execute(array($data->descripcion,$data->costo,$data->precio));
		}catch(Exception $e)
		{

			die($e->getMessage());

		}

	}
}



 ?>