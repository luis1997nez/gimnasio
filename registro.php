<?php
	require_once ('backend/Modelo/conexion.php');
	$model = new Conexion();
	$conexion = $model->get_conexion();
	session_start();
		if(isset($_SESSION['username'])){
      header('location: index.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos/registro.css">
    <script src="js/validar.js"></script>
</head>
<body>
    <header>
        <div>
            <p class = "regresar"><a href="index.php">Volver a Popeye Gym</a></p>
        </div>
     </header>

     <section>

    <form action="backend/controlador/registro.php" method="POST" class="form-register" onsubmit="return validar();">
    <h3 class="text-center mb-4 billing-heading" id = "titu">Crear cuenta</h3>
    <div class="contenedor-inputs">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48" required>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="input-48" required>
        <input type="email" id="email" name="email" placeholder="Correo" class="input-100" required>
        <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" class="input-48" required>
        <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" required>
        <input type="tel" id="nombre" name="telefono" placeholder="Telefono" class="input-100" required>
        <input type="submit" name="boton" value="Registrarse" class=" btn btn-primary btn-block" required>
        <p class="form__link">¿Ya tienes una cuenta? <a href="login.php">Ingresa aquí</a></p>
    </div>
    </form>
    </section>

    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre Nosotros</h2>
              <p>Somos un centro de acondicionamiento físico y gimnasio profesional a tu alcance.
        Contamos con excelentes instructores y el mejor equipo para cumplir con tus rutinas diarias.
        Ven a conocernos y construye tu cuerpo fitness.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">¿Alguna Pregunta?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">(998) 292 21 37</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">salud@popeye.com.mx</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> todos los derechos reservados.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    <script src="login/js/jquery-3.1.1.min.js"></script>
	<script src="login/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>