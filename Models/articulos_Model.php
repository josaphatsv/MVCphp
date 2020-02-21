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
}



 ?>