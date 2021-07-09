<?php

require_once ('../Modelo/conexion.php');
require_once ('../Modelo/valregistro.php');

if(isset($_POST['boton'])){
	if($_POST['nombre'] == '' or $_POST['apellidos'] == '' or $_POST['email'] == '' or $_POST['usuario'] == '' or $_POST['clave'] == '' /*or $_POST['claveveri'] = ''*/ or $_POST['telefono'] == ''){
		//echo "Por favor llene todos los campos";
	}else{

		$msj= 0;

		$model = new Conexion();
		$conexion = $model->get_conexion();
		$verificar = 0;

		//$sql = "SELECT * FROM usuarios";

		$sql = $conexion->query('SELECT * FROM usuarios');

		//$rec = $conexion->prepare($sql);

		$verificar = 0;

		while($resultado = $sql->fetch(PDO::FETCH_OBJ)){
			if($resultado->correoUser == $_POST['email']){
				$verificar = 1;
			}else if($resultado->nickUser == $_POST['usuario']){
				$verificar = 2;
			}
		}

	if($verificar == 1){

		

		//header('location: ../../registro.php');
		echo '<script>
    alert("El correo ya esta registrado");
    window.history.go(-1);
    </script>';

	}else if($verificar == 2){

		//header('location: ../../registro.php');
		echo '<script>
    alert("El nombre de usuario ya esta registrado");
    window.history.go(-1);
    </script>';
		}else{

				$nom = $_POST['nombre'];
				$ape = $_POST['apellidos'];
				$corre = $_POST['email'];
				$us = $_POST['usuario'];
				$pw = $_POST['clave'];
				$tel = $_POST['telefono'];
				$rol = 1;

				$registrar = new valregistro();

				$registrar->insertarRegistro($nom, $ape, $corre, $us, $pw, $tel, $rol);

				header('location: ../../login.php');
		}
	}

	echo '<script>
    alert("Por favor llene todos los campos");
    window.history.go(-1);
    </script>';
}

?>