<?php 

/**
 * @autor Josaphat Lopez Ceron
 *Controlador de Articulos
 */
//LLamada al Modelo
require_once("Models/articulos_Model.php");
$productos=new articulos_Model();
$listadoProductos=$productos->get_articulos();

//Llamada a la vista
require_once("Views/articulos_View.php");

 ?>