<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Classic Pizza</title>
	<!-- fonts links-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="../Assets/styles/main.css" rel="stylesheet" type="text/css">
	<link href="../Assets/styles/promo.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="styles/images/logo.jpg" />
</head>

<body>
	<header>
		<div><img id="logo" src="../Assets/images/logo.jpg" alt="logo"></div>
		<div class="nav__links">
			<a href="..">Inicio</a>
			<a href="pizza.php" style="text-shadow: 5px 5px 5px #134225;color:white;">Pizza</a>
			<a href="other.php">Otros</a>
			<a href="promo.php">Promos</a>
			<a href="about.php">Acerca de</a>
		</div>

		<ul class="cta">
			<li>
				<?php

				if (!isset($_SESSION['username'])) {
					echo '<a href="login.php"><span class="fas fa-sign-in-alt"></span> Sign-In</a>';
				} else if ($_SESSION['itemcount'] != 0) {
					echo '<a href="cart.php"><span class="fas fa-shopping-basket"></span> ' . $_SESSION['itemcount'] . '</a>';
					echo '<a href="profile.php"><span class="fas fa-user"></span> Hi ' . $_SESSION['username'] . '</a>';
				} else {
					echo '<a href="cart.php"><span class="fas fa-shopping-basket"></span></a>';
					echo '<a href="profile.php"><span class="fas fa-user"></span> Hi ' . $_SESSION['username'] . '</a>';
				}
				?>
			</li>
		</ul>
	</header>
	<div class="push1"></div>
	<div class="wrapper">
		<div class="items">
			<div class="title">
				<h1 id="classic">~ Promociones ~</h1>
			</div>
			<div class="container">
				<img class="promo" src="../Assets/images/pizza/1.jpg">
				<img class="promo" src="../Assets/images/pizza/2.jpg">
				<img class="promo" src="../Assets/images/pizza/3.jpg">
				<img class="promo" src="../Assets/images/pizza/4.jpg">
				<img class="promo" src="../Assets/images/pizza/5.jpg">
				<img class="promo" src="../Assets/images/pizza/6.jpg">
				<img class="promo" src="../Assets/images/pizza/7.jpg">
				<img class="promo" src="../Assets/images/pizza/8.jpg">
			</div>
		</div>
		<div class="push"></div>
	</div>
</body>

<footer class="footer">
	<ul class="fd">
		<h2>Contacta con nosotros</h2>
		<li>Oficina Central, </li>
		<li>No. 55,Calle San Martin, </li>
		<li>2do. Anillo, </li>
		<li>Santa Cruz.</li><br>
		<li><i class="fas fa-phone-square"> </i> +591 76935625</li>
		<li><i class="fas fa-phone-square"> </i> +591 3306 225</li>
	</ul>

	<ul class="fd">
		<h2>Acerca de:</h2>
		<li>Nuestro Patrimonio</li>
		<li>Nuestro Cafe</li>
		<li>Historia y Noticias</li>
		<li>Relaciones con Inversores</li>
		<li>Politica</li>
		<li>CUSTOMER SERVICE</li>
	</ul>

	<ul class="fd">
		<h2>Servicios:</h2>
		<li>Wifi Gratis</li>
		<li>Servicio Delivery</li>
		<li>App Movil</li>
		<li>Linea Despacho</li>
	</ul>

	<ul class="fd">
		<h2>Síguenos en:</h2>
		<li><i class="fab fa-facebook" style="font-size:30px"> </i>
			<i class="fab fa-instagram" style="font-size:30px"> </i>
			<i class="fab fa-twitter" style="font-size:30px"> </i>
			<i class="fab fa-youtube" style="font-size:30px"> </i>
		</li><br><br>
		<h2>Descargar la aplicación:</h2>
		<li><i class="fab fa-google-play" style="font-size:40px;"> </i>
			<i class="fab fa-apple" style="font-size:45px;"> </i>
		</li>
	</ul>

	<div class="fd5">
		<img src="../Assets/images/logo.jpg">
		<p> © Classic Pizza<br>Reservados todos los derechos.</p>
	</div>
</footer>

</html>