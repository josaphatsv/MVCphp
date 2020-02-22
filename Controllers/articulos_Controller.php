<?php 

/**
 * @autor Josaphat Lopez Ceron
 *Controlador de Articulos
 */
//LLamada al Modelo
require_once("Models/articulos_Model.php");
class articulos_Controller{
	private $productos;

	public function __CONSTRUCT(){

		$this->productos=new articulos_Model();

	}
	public function Index(){
		
		$listadoProductos=$this->productos->get_articulos();
		//Llamada a la vista
		require_once("Views/articulos_View.php");

	}
}


 ?>