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
	<title>Agregar suarios</title>
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

			<h1 class="titulo">Añadir Usuario</h1>

				<form name="form" action="#" method="POST" class = "formu">

                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Nombre" autofocus="true" class="form-control campo" required="true" />

                    <label for="telefono">Apellidos:</label>
                    <input type="text" name="apellido" placeholder="Apellidos" class="form-control campo" required="true" />

                    <label for="correo">E-Mail:</label>
                    <input type="email" name="correo" placeholder="E-Mail" class="form-control campo" required="true" />

                    <label for="telefono">Nombre de usuario:</label>
                    <input type="text" name="usuario" placeholder="Nombre de usuario" class="form-control campo" required="true" />

                    <label for="telefono">Contrasenia:</label>
                    <input type="password" name="contrasenia" placeholder="Contrasenia" class="form-control campo" required="true" />

                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" placeholder="Teléfono" class="form-control campo" required="true" />

                    <label for="Rol">Rol:</label>
                    <input type="text" name="rol" placeholder="Rol" class="form-control campo" />

                    <input type="submit" name = "boton" value="Guardar" class="bt"/>
				</form>

				<?php

					require_once '../conexion.php';

					if(isset($_POST['boton'])){

						if($_POST['nombre'] == '' or $_POST['apellido'] == '' or $_POST['correo'] == '' or $_POST['usuario'] == '' or $_POST['contrasenia'] == ''or $_POST['telefono'] == '' or $_POST['rol'] == ''){
							echo "Por favor llene todos los campos";
						
						}else{
						
							$sql = 'SELECT * FROM usuarios';
							$rec = mysqli_query($conexion, $sql);
							$verificar = 0;

							while($resultado = mysqli_fetch_object($rec)){
								if($resultado->correoUser == $_POST['correo']){
									$verificar = 1;
									
									echo '<script>
            								alert("El correo ya existe");
           		  						 </script>';
								}else if($resultado->nickUser == $_POST['usuario']){
									$verificar = 2;
									echo "El nombre de usuario ya existe";
								}
							}

							if($verificar == 0){

								$nom = $_POST['nombre'];
								$ape = $_POST['apellido'];
								$corre = $_POST['correo'];
								$us = $_POST['usuario'];
								$pw = $_POST['contrasenia'];
								$pw_en = password_hash($pw, PASSWORD_DEFAULT);
								$tel = $_POST['telefono'];
								$rol = $_POST['rol'];

								$sql2 = "INSERT INTO usuarios(nombreUser, apellidosUser, correoUser, nickUser, contrasenia, telefono, idRol) VALUES('$nom', '$ape', '$corre', '$us', '$pw_en', '$tel', '$rol')";			
								mysqli_query($conexion, $sql2);

								echo "Registrado";

							}

						}
					}

				?>
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