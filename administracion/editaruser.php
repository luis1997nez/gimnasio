<?php
	require_once ('../backend/Modelo/Conexion.php');
	$model = new Conexion();
	$conexion = $model->get_conexion();
	session_start();
		if(isset($_SESSION['username'])){
			if($_SESSION['rol'] == 2){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos/administracion/panel.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos/administracion/inserta.css">
	<link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
	<!--
  	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">-->
</head>
<body>

	<header>

		<div class = "inicio">
			<a href = "../index.php">Ir a inicio</a>
		</div>

		<form method="POST">
			<input class = "boton" type="submit" value = "Cerrar Sesion" name="cerrar">
		</form>

		<div class = "user">
			
			<?php
				echo "Bienvenido "."<b>".$_SESSION['username']."</b>";
			?>
		</div>

		<?php

			if(isset($_POST['cerrar'])){
				session_destroy();
				header('location: ../index.php');
			}

		?>

		</header>

		<nav>
			<!--<h1>Control Panel</h1>-->
			<table>
			<ul style="list-style: none;" class = "menu1">
				<li  class = "menu2"><a href = "home.php">Control Panel</a></li>
				<li  class = "menu2"><a href = "contactop.php">Contacto</a></li>
				<li  class = "menu2"><a href = "usuariosp.php">Usuarios</a></li>
			</ul>
			</table>
		</nav>

<section>

	<div class = "cuerpo">
	<div class = "contenido">

			<h1 class="titulo">Editar Usuario</h1>

						<table class = "espacio">

			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Nombre de usuario</th>
				<th>Teléfono</th>
			<!--<th>seleccionar</th>-->
			</tr>
			<?php
				include('../conexion.php');

				
				$vis="SELECT * FROM usuarios";

				$pro = $conexion->query($vis);

				if($pro->num_rows>=1){
					while($fila=$pro->fetch_array(MYSQLI_BOTH)){
						echo '<tr>
								<td>'.$fila['idUsuario'].'</td>
								<td>'.$fila['nombreUser'].'</td>
								<td>'.$fila['apellidosUser'].'</td>
								<td>'.$fila['correoUser'].'</td>
								<td>'.$fila['nickUser'].'</td>
								<td>'.$fila['telefono'].'</td>
							  </tr>';
					}

				}

			?>

			</table>

		</div>
	</div>

</section>


	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="js/modernizr-custom.js"></script>
    <script src="js/polyfiller.js"></script>
	<script>
          webshims.setOptions('waitReady', false);
          webshims.setOptions('forms-ext', {types: 'date'});
          webshims.polyfill('forms forms-ext');
     </script>

	<section></section>


	<footer></footer>

</body>
</html>
<?php
  }else{
  	header('Location: ../index.php');
  }
}else{
	header('Location: ../login.php');
}
?>