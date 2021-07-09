<?php
	require_once ('backend/Modelo/conexion.php');
	$model = new Conexion();
	$conexion = $model->get_conexion();
	session_start();
		if(isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee & Food</title>
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
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/estilos/logo.css">
    <link rel="stylesheet" type="text/css" href="css/estilos/sesion.css">
    <link rel="stylesheet" type="text/css" href="css/estilos/contacto.css">
    <link rel="stylesheet" type="text/css" href="css/estilos/barra.css">

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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Coffee&Food</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menú</a></li>
	          <li class="nav-item"><a href="servicios.php" class="nav-link">Servicios</a></li>
	          <li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="contacto.php" class="nav-link">Contacto</a></li>	          
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Contáctanos</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Coffee&Food</a></span> <span>Contáctanos</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
      <div class="container-wrap" >
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info" id = "informacion">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>(998) 292 21 37</h3>
                  <p>El mejor café de nuestro méxico dedicado para nuestros clientes.</p>
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

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Información de Contacto</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Dirección:</span> Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Teléfono:</span> <a href="tel://1234567920"> (998) 292 21 37</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@yoursite.com">  coffeeandfood@coffeefood.com.mx</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="backend/Controlador/contacto.php" method = "POST" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Tú nombre" name = "nombre" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Tú Email" name = "email" required>
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto" name = "asunto" required>
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Mensaje" name = "mensaje" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d119108.30856133786!2d-86.966767!3d21.1071976!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sUniversidad+Tecnologica+de+Canc%C3%BAn!5e0!3m2!1ses!2smx!4v1564348292722!5m2!1ses!2smx" width="2000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    			</div>
    </section>

    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre Nosotros</h2>
              <p>Nos dedicamos a brindar el mejor servicio para ofrecer nuestro café y postres, nacimos en 2014 con la visión de recibir a nuestros clientes y endulzar sus momentos</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href=""><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/CoffeeFood-328706751354764/"><span class="icon-facebook"></span></a></li>
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
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">coffeeandfood@coffeefood.com.mx</span></a></li>
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
    <title>Coffee & Food</title>
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
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/estilos/logo.css">
    <link rel="stylesheet" type="text/css" href="css/estilos/sesion.css">
    <link rel="stylesheet" type="text/css" href="css/estilos/contacto.css">

  </head>
  <body>

    <header>
      
      <a href="registro.php" class = "registo">Registrate</a>
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Coffee&Food</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menú</a></li>
	          <li class="nav-item"><a href="servicios.php" class="nav-link">Servicios</a></li>
	          <li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="contacto.php" class="nav-link">Contacto</a></li>	          
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Contáctanos</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Coffee&Food</a></span> <span>Contáctanos</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
      <div class="container-wrap" >
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info" id = "informacion">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>(998) 292 21 37</h3>
                  <p>El mejor café de nuestro méxico dedicado para nuestros clientes.</p>
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

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Información de Contacto</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Dirección:</span> Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Teléfono:</span> <a href="tel://1234567920"> (998) 292 21 37</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@yoursite.com">  coffeeandfood@coffeefood.com.mx</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="backend/Controlador/contacto.php" method = "POST" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Tú nombre" name = "nombre" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Tú Email" name = "email" required>
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto" name = "asunto" required>
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Mensaje" name = "mensaje" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d119108.30856133786!2d-86.966767!3d21.1071976!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sUniversidad+Tecnologica+de+Canc%C3%BAn!5e0!3m2!1ses!2smx!4v1564348292722!5m2!1ses!2smx" width="2000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    			</div>
    </section>

    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre Nosotros</h2>
              <p>Nos dedicamos a brindar el mejor servicio para ofrecer nuestro café y postres, nacimos en 2014 con la visión de recibir a nuestros clientes y endulzar sus momentos</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href=""><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/CoffeeFood-328706751354764/"><span class="icon-facebook"></span></a></li>
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
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">coffeeandfood@coffeefood.com.mx</span></a></li>
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