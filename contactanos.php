<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Domo Security | Contáctanos</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:300,400,700' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<?php include('header.php'); ?>
		<!-- End Header -->

		<!-- map 
			================================================== -->
		<div id="map"></div>
		<!-- map -->

		<!-- contact section 
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="col-md-4">
					<div class="contact-info">
						<h2>Contactanos</h2>
						<p>Escríbenos para tus consultas o solicita presupuestos de cualquier de nuestros servicios.</p>
						<ul class="information-list">
							<li><i class="fa fa-map-marker"></i><span>Av. Los Laureles Nº 148 - Independencia - Lima - Perú</span></li>
							<li><i class="fa fa-phone"></i><span>01 722 2929</span><span>965 203 003</span><span>936 666 438</span></li>
							<li><i class="fa fa-envelope-o"></i><a href="#">ventas@domosecurityperu.com</a></li>
							<li><i class="fa fa-envelope-o"></i><a href="#">soporte@domosecurityperu.com</a></li>
							<li><i class="fa fa-envelope-o"></i><a href="#">gerencia@domosecurityperu.com</a></li>
							<li><a href="tel:936666438"><img src="img/ws.jpg" alt="ws"></a></li>
						</ul>						
					</div>
				</div>
				<div class="col-md-8">
					<form id="contact-form" method="POST">
						<h2>Escribenos/cotizanos</h2>
						<div class="row">
							<div class="col-md-4">
								<input name="name" id="name" type="text" placeholder="Nombre">
							</div>
							<div class="col-md-4">
								<input name="mail" id="mail" type="text" placeholder="Email">
							</div>
							<div class="col-md-4">
								<input name="phone" id="tel-number" type="text" placeholder="Teléfono">
							</div>
						</div>
						<textarea name="comment" id="comment" placeholder="Mensaje"></textarea>
						<img src="img/visa2.jpg" style="float: right;">
						<input type="submit" id="submit_contact" value="Enviar Mensaje">
						<div id="msg" class="message"></div>
					</form>
				</div>
			</div>
		</section>
		<!-- End contact section --><!-- footer 
			================================================== -->
		<?php include('footer.php'); ?>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI0HQu3qvHzUxGzHloGexRw2f34lPOFfg"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>