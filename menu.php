<?php
	$hamburguesas = array(
							array("id" => 1, "nombre" => "Hamburguesa Sencilla/Clasica", "descripcion"  => "Hambuguesa normal. Lleva los ongredientes que deseces por un precio estraordinariamente prefecto para ser normal.",	"precio" => "50", "url" => "", "imagen" => "imagesB/burger1.jpeg"),
							array("id" => 2, "nombre" => "Hamburguesa de Champiñones", "descripcion"  => "Hamburguesa con un sabor exqusito para el paladar, con un precio sumamente especial.", "precio" => "55", "url" => "", "imagen" => "imagesB/burger2.jpeg")

	);
	//echo "<pre>";
	//print_r($hamburguesas);
	//die();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Hambugueseria-Menu</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="index.php" class="logo">The Hiding Web</a>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul class="links">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="promociones.php">Promociones</a></li>
				<li class="active"><a href="memu.php">Menú</a></li>
				<li><a href="historia.php">Historia</a></li>
			</ul>
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">

			<div class="row" >
				<?php foreach($hamburguesas as $hamburguesa): ?>
				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger1.jpeg" class="card-img-top" alt="hamburguesa_sencilla">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa Sencilla/Clasica</h5>
					  <p class="card-text">Hambuguesa normal. Lleva los ongredientes que deseces por un precio estraordinariamente prefecto para ser normal.</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
				<?php endforeach; ?>

				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger3.jpeg" class="card-img-top" alt="hamburguesa_pollo_frito">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa Pollo Frito</h5>
					  <p class="card-text">Hamburguesa hecha con los mejores pollos y freidos en la mejor freidora.</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
	  
				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger4.jpg" class="card-img-top" alt="hamburguesa_new_york">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa Estilo New York</h5>
					  <p class="card-text">Hamburguesa al puro estilo de Nueva York.</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
	  
			  </div>
			</section>
	  
			<section>
			  <div class="row">
	  
				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger5.jpeg" class="card-img-top" alt="hamburguesa_queso">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa Queso</h5>
					  <p class="card-text">Una hamburguesa bañada en queso amarrillo, para aquellos amantes al queso.</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
	  
				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger6.jpeg" class="card-img-top" alt="hamburguesa_doble">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa Doble</h5>
					  <p class="card-text">Una hamburguesa, que asi como su tamaño asi mismo con su sabor, doblemente exquisito!</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
	  
				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger8.jpeg" class="card-img-top" alt="hamburguesa_bbq">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa BBQ</h5>
					  <p class="card-text">Hambuguesa hecha a la parrilla, junto a la exquisita salsa BBQ especial de la casa.</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
	  
				<div class=" p-2 col-md-3">
				  <div class="card" style="width: auto;">
					<img src="imagesB/burger7.jpeg" class="card-img-top" alt="hamburguesa_vegana">
					<div class="card-body">
					  <h5 class="card-title">Hamburguesa Vegana</h5>
					  <p class="card-text">Una hamburguesa para no dejar de lado aquellas perosnas que prefieren no comer carne, conservando un sabor exquisito.</p>
					  <a href="#" class="btn btn-primary">Comprar!</a>
					</div>
				  </div>
				</div>
	  
			  </div>
			</section>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<section>
				<div class="container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d183.1189817776721!2d-100.88259340791274!3d20.215796537116674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cc49b10c25e37%3A0x21076bcaa1b312a0!2sG%C3%BCero&#39;s%20Pizza!5e1!3m2!1ses-419!2smx!4v1724699486235!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			</section>
			<section class="split contact">
				<section class="alt">
					<h3>Address</h3>
					<p>1234 Somewhere Road #87257<br />
						Nashville, TN 00000-0000</p>
				</section>
				<section>
					<h3>Phone</h3>
					<p><a href="#">(000) 000-0000</a></p>
				</section>
				<section>
					<h3>Email</h3>
					<p><a href="#">info@untitled.tld</a></p>
				</section>
				<section>
					<h3>Social</h3>
					<ul class="icons alt">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a>
						</li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a>
						</li>
					</ul>
				</section>
			</section>
		</footer>

		<!-- Copyright -->
		<div id="copyright">
			<ul>
				<li>&copy; Te Hiding Web</li>
				<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>