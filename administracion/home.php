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
	<title>Control Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos/administracion/home.css">
	<link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
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

		<h1 class = "titulo"><a href="usuariosp.php">Usuarios</a></h1>

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

				$vis = "SELECT * FROM usuarios";

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


<section>

		<div class = "cuerpo">
		<div class = "contenido">

		<h1 class = "titulo"><a href="contactop.php">Contactos</a></h1></a>

			<table class = "espacio">

			<?php
				

				include('../conexion.php');

				$vis = "SELECT * FROM contacto";

				$pro = $conexion->query($vis);

				if($pro->num_rows>=1){
					while($fila=$pro->fetch_array(MYSQLI_BOTH)){
						echo '<tr>
								<th>#</th>
								<th>Usuario</th>
								<th>Correo</th>
								<th>Asunto</th>
								<th>Mensaje</th>
							</tr>
							<tr>
								<td>'.$fila['idContacto'].'</td>
								<td>'.$fila['nombreUsu'].'</td>
								<td>'.$fila['email'].'</td>
								<td>'.$fila['asunto'].'</td>
								<td>'.$fila['mensaje'].'</td>
							  </tr>';
					}

				}else{
					echo '<div class = "no" >'."No hay ningún mensaje".'</div>';
				}

			?>

			</table>

		</div>
		</div>
	
	</form>

</div>

</section>



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