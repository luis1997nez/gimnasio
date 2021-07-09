<?php
    
    
	class Conexion{
		public function get_conexion(){
			$user = "root";
			$pass = "";
			$host = "localhost";
			$db = "gimnasio";

			$conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
			//$conexion->exec('set names utf8');
			

			return $conexion;

		}
	}


	/*

	try{


			$user = "root";
			$pass = "";
			$host = "localhost";
			$db = "coffee_food";

			$conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);

			echo 'Conexion Ok';

		}catch(Exception $e){

			die('Error: '. $e->GetMessage());

		}finally{
			$conexion = null;
		}

	*/

?>