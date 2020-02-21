<?php 
/**
 * @autor Josaphat Lopez Ceron
 *Clases para realizar conexion a la base de datos MariaDB
 */
class dbConector
{
	public static function conexion(){
		//***Controlador de Errores de conexion**/
		$type="mysql:";
		$host="localhost";
		$db="tester";
		$user="root",
		$pass="";

		try{
			$conexion= new PDO($type.":host=".$host.";dbname=".$db,$user,$pass);
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");


		}cacth(Exception $e){
			die('Error'.$e->getMessage());
			echo "Linea del error".$e->getLine();
		}
		
		return $conexion;
	}

	
}

 ?>