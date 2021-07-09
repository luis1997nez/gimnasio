<?php

/* El header me esta mandando al login, por lo tanto no entrar al index por el direccionamiento
header('location:login.php'); */
	require_once ('backend/Modelo/Conexion.php');
	session_start();
/*El nombre de la variable que guadaba al objeto tenia otro nombre, por lo tengo al llamar a la funcion get_conexion tenia el objeto por tener otro nombre*/
	$model = new Conexion();
	$conexion = $model->get_conexion(); 
		if(isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>POPEYE GYM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/logo.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/sesion.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/index.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/barra.css">
	<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
  </head>
  <body>
	
    <header>
		<form method="POST">
			<input class = "boton" type="submit" value = "Cerrar Sesión" name="cerrar">
		</form>

		<div class = "sesion">
			<?php
				echo "Bienvenido "."<b>".$_SESSION['username']."</b>";
			?>
		</div>

		<?php
			if(isset($_POST['cerrar'])){
				session_destroy();
				header('location: index.php');
			}
		?>
    </header>
	
    <section class = "hola" ></section>
   

  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a href="index.php"><img class = "logo" src="images/estructura/logo.png"/></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">POPEYE GYM</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Clases</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Promociones</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>	          
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading" style = "font-family: Arial; color: white">Bienvenido</span>
              <h1 class="mb-4">El mejor gimnasio para tener una mejor salud</h1>
              <p class="mb-4 mb-md-5">Las mejores máquinas para los pensamientos constructivos.</p>
              <p><a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Promociones</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading" style = "font-family: Arial; color: white">Bienvenido</span>
              <h1 class="mb-4">El mejor lugar &amp; comodo lugar para ejercitarse</h1>
              <p class="mb-4 mb-md-5">Los mejores instructores</p>
              <p><a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Servicios</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading" style = "font-family: Arial; color: white">Bienvenido</span>
              <h1 class="mb-4">Salud y Bienestar</h1>
              <p class="mb-4 mb-md-5">Somos más que un gimnasio, somo una familia</p>
              <p><a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Clases</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>(998) 292 21 37</h3>
	    						<p>El mejor lugar &amp; un comodo lugar para ejercitarse</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Paseos Nikté</h3>
	    						<p>Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Abrimos de lunes a domingo</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading" style = "font-family: Arial; color: white; margin-bottom: 1px;">Nosotros</span>
	          <h2 class="mb-4">Conócenos</h2>
	        </div>
	        <div>
	  				<p style = "color: #dedede">	Somos un centro de acondicionamiento físico y gimnasio profesional a tu alcance.
	  					Contamos con excelentes instructores y el mejor equipo para cumplir con tus rutinas diarias.
						Ven a conocernos y construye tu cuerpo fitness.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading" style = "font-family: Arial; color: white; margin-bottom: 1px;">Atrévete</span>
	            <h2 class="mb-4">Nuestras clases</h2>
	            <p class="mb-4">Nuestros instructores y equipos de calidad</p>
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Mira nuestras clases</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d119108.30856133786!2d-86.966767!3d21.1071976!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sUniversidad+Tecnologica+de+Canc%C3%BAn!5e0!3m2!1ses!2smx!4v1564348292722!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    			</div>    			
    		</div>
    	</div>
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
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!--
<script type="text/javascript">
function EnvioReservacion() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Desea reservar ahora?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
alert("¡Reservación Aceptada");
}
//Detectamos si el usuario denegó el mensaje
else {
alert("Cancelo el envio de Reservación");
}
}
</script>
-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php
}else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>POPEYE GYM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/logo.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/sesion.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/index.css">
	<link rel="stylesheet" type="text/css" href="css/estilos/barra.css">
	<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
  </head>
  <body>
	
    <header>
      
      <a href="registro.php" class = "registo">Regístrate</a>
      <a href="login.php" class = "sesion">Iniciar Sesión</a>
      
    </header>
	
    <section class = "hola" ></section>
   

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a href="index.php"><img class = "logo" src="images/estructura/logo.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">POPEYE GYM</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Clases</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Promociones</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>           
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading" style = "font-family: Arial; color: white">Bienvenido</span>
              <h1 class="mb-4">El mejor gimnasio para tener una mejor salud</h1>
              <p class="mb-4 mb-md-5">Las mejores máquinas para los pensamientos constructivos.</p>
              <p><a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Promociones</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading" style = "font-family: Arial; color: white">Bienvenido</span>
              <h1 class="mb-4">El mejor lugar &amp; comodo lugar para ejercitarse</h1>
              <p class="mb-4 mb-md-5">Los mejores instructores</p>
              <p><a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Servicios</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading" style = "font-family: Arial; color: white">Bienvenido</span>
              <h1 class="mb-4">Salud y Bienestar</h1>
              <p class="mb-4 mb-md-5">Somos más que un gimnasio, somo una familia</p>
              <p><a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Ver Clases</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>(998) 292 21 37</h3>
                  <p>El mejor lugar &amp; un comodo lugar para ejercitarse</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>Paseos Nikté</h3>
                  <p>Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-clock-o"></span></div>
                <div class="text">
                  <h3>Abrimos de lunes a domingo</h3>
                  <p>8:00am - 9:00pm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
      <div class="one-half ftco-animate">
        <div class="overlap">
          <div class="heading-section ftco-animate ">
            <span class="subheading" style = "font-family: Arial; color: white; margin-bottom: 1px;">Nosotros</span>
            <h2 class="mb-4">Conócenos</h2>
          </div>
          <div>
            <p style = "color: #dedede">Somos un centro de acondicionamiento físico y gimnasio profesional a tu alcance.
              Contamos con excelentes instructores y el mejor equipo para cumplir con tus rutinas diarias.
            Ven a conocernos y construye tu cuerpo fitness.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pr-md-5">
            <div class="heading-section text-md-right ftco-animate">
              <span class="subheading" style = "font-family: Arial; color: white; margin-bottom: 1px;">Atrévete</span>
              <h2 class="mb-4">Nuestras clases</h2>
              <p class="mb-4">Nuestros instructores y equipos de calidad</p>
              <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Mira nuestras clases</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-appointment">
      <div class="overlay"></div>
      <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
          <div class="col-md-6 d-flex align-self-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d119108.30856133786!2d-86.966767!3d21.1071976!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sUniversidad+Tecnologica+de+Canc%C3%BAn!5e0!3m2!1ses!2smx!4v1564348292722!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>          
        </div>
      </div>
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
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!--
<script type="text/javascript">
function EnvioReservacion() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Desea reservar ahora?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
alert("¡Reservación Aceptada");
}
//Detectamos si el usuario denegó el mensaje
else {
alert("Cancelo el envio de Reservación");
}
}
</script>
-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php
}
?>