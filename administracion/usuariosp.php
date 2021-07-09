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
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos/administracion/panel.css">
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

		<h1 class = "titulo">Catálogo de Usuarios</h1>

		<form action = "" method = "POST">
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
								<td><input type="checkbox" name="eliminar[]" value="'.$fila['idUsuario'].'"/></td>
								<td><a href="editaruser.php?id='.$fila['idUsuario'].'">Editar</a></td>
							  </tr>';
					}

				}else{
					session_destroy();
				}

			?>

			</table>

		</div>
		</div>

	<div class = "botones">
	
	
		<input type="submit" name="borrar" value="Eliminar Usuario" onclick = "reload()" class = "eliminars" />
		<!-- <input type="submit" name="modificar" value="Editar Usuario" onclick = "reload()" class = "insertar" /> -->
	
		<?php
 		
		if(isset($_POST['borrar'])){
			if(empty($_POST['eliminar'])){
				echo '<div class = "msj">'."No se ha seleccionado ningun usuario".'</div>';
			}else{
				foreach($_POST['eliminar'] as $id_borrar){
					$borrarCanciones=$conexion->query("DELETE FROM usuarios WHERE idUsuario='$id_borrar'");
	
					if($_SESSION['username'] == $borrarCanciones['nickUser']){
						session_destroy();
					}
				}
			}
		}
	
		?>

		<!--<button class = "editar">Editar Usuario</button>-->
		<div class = "insertar"><a href = "nuevouser.php">Agregar Usuario <a/></div>
		<!-- <div class = "insertar"><a href = "editaruser.php">Editar Usuario <a/></div> -->


		</form>

	</div>

</section>



	<!--
  div class="container">
		<ol class="breadcrumb">
		  <li><a href="index.php">Inicio</a></li>
		  <li class="active">Agregar Alumnos del V Semestre</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar Alumnos del V Semestre</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" placeholder="Nombre" autofocus="true" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="correo">E-Mail:</label>
                        <input type="email" name="correo" placeholder="E-Mail" class="form-control" required="true" />
                    </p>
                    <p>
                    <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" />
                    </p>
                    <hr />
                    <input type="submit" value="Guardar" class="btn btn-primary"/>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="js/modernizr-custom.js"></script>
        polyfiller file to detect and load polyfills 
    <script src="js/polyfiller.js"></script>
	<script>
          webshims.setOptions('waitReady', false);
          webshims.setOptions('forms-ext', {types: 'date'});
          webshims.polyfill('forms forms-ext');
     </script>

     -->

	<section>
		

	</section>


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