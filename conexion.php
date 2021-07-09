<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$bd = "gimnasio";
//creación de la conexíon
@$conexion = mysqli_connect($servidor, $usuario, $password, $bd) or die ("no se ha podido conectar al servidor de base de datos");
mysqli_set_charset($conexion, "utf8");


/*
if($conexion){
	echo "Se ha conectado a la base de datos";
}else{
	echo "No se conecto";
}*/

?>