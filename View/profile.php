<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('location:index.php');
}

if (isset($_POST['logout'])) {
	session_destroy();
	echo '<script>confirm("Se ha cerrado la sesión.");</script>';
	echo '<script>window.location="index.php"</script>';
}

require '../Config/config.php';
$un = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Classic Pizza</title>
	<!-- fonts links-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="../Assets/styles/main.css" rel="stylesheet" type="text/css">
	<link href="../Assets/styles/profile.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="../Assets/images/logo.jpg" />
</head>

<body>
	<header>
		<div><img id="logo" src="../Assets/images/logo.jpg" alt="logo"></div>
		<div class="nav__links">
			<a href="..">Inicio</a>
			<a href="pizza.php">Pizza</a>
			<a href="other.php">Otros</a>
			<a href="promo.php">Promo</a>
			<a href="about.php">Acerca de</a>
		</div>

		<ul class="cta">
			<li>
				<?php
				if (!isset($_SESSION['username'])) {
					echo '<a href="login.php"><span class="fas fa-sign-in-alt"></span> Sign-In</a>';
				} else if ($_SESSION['itemcount'] != 0) {
					echo '<a href="cart.php"><span class="fas fa-shopping-basket"></span> ' . $_SESSION['itemcount'] . '</a>';
					echo '<a href="profile.php"><span class="fas fa-user"></span> Hola ' . $_SESSION['username'] . '</a>';
				} else {
					echo '<a href="cart.php"><span class="fas fa-shopping-basket"></span></a>';
					echo '<a href="profile.php"><span class="fas fa-user"></span> Hola ' . $_SESSION['username'] . '</a>';
				}
				?>
			</li>
		</ul>
	</header>
	<div class="push1"></div>
	<div class="wrapper">
		<div class="items">
			<div class="profile">
				<div class="title">
					<h1 id="classic">Mi Informacion</h1>
				</div>
				<?php
				$query = "select * from userinfo where user='$un';";
				$result = mysqli_query($conn, $query);
				if (mysqli_num_rows($result) == 1) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
						<table class="info">
							<tr>
								<td>
									<h1>Nombre completo:<h1>
								</td>
								<td>
									<h1><?= $row['fullname']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Nombre de usuario:<h1>
								</td>
								<td>
									<h1><?= $row['user']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Correo electrónico:<h1>
								</td>
								<td>
									<h1><?= $row['email']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Número de teléfono:<h1>
								</td>
								<td>
									<h1><?= $row['phone']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Ciudad:<h1>
								</td>
								<td>
									<h1><?= $row['city']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Género:<h1>
								</td>
								<td>
									<h1><?= $row['gender']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Fecha de nacimiento:<h1>
								</td>
								<td>
									<h1><?= $row['dob']; ?></h1>
								</td>
							</tr>
							<tr>
								<td>
									<h1>Dirección:<h1>
								</td>
								<td>
									<h1><?= $row['address']; ?></h1>
								</td>
							</tr>
							<tr>
								<form action="profile.php" method="post">
									<td class="tdbtn"><button type="submit" name="logout" value="logout" class="btn">log out</button></td>
									<form>
							</tr>
						</table>
				<?php }
				} ?>
				<form>
			</div>

			<div class="history">
				<div class="title">
					<h1 id="classic">Historial de pedidos</h1>
				</div>

				<table class="info2">
					<tr>
						<th>
							<h1>Fecha &amp; Tiempo<h1>
						</th>
						<th>
							<h1>Para<h1>
						</th>
						<th>
							<h1>A la dirección<h1>
						</th>
						<th>
							<h1>Forma de pago<h1>
						</th>
						<th>
							<h1>Pago total<h1>
						</th>
					</tr>
					<?php
					$query = "select * from orderinfo where buyer='$un' ORDER BY date DESC;";
					$result = mysqli_query($conn, $query);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
					?>
							<tr>
								<td id="date">
									<h1 class="right"><?= $row['date']; ?></h1>
								</td>
								<td>
									<h1 class="right"><?= $row['reciver_name']; ?></h1>
								</td>
								<td>
									<h1 class="right"><?= $row['reciver_add']; ?></h1>
								</td>
								<td>
									<h1 class="right"><?= $row['payment_method']; ?></h1>
								</td>
								<td>
									<h1 class="right">Rs. <?php echo number_format($row['payment'], 2); ?></h1>
								</td>
							</tr>
					<?php }
					} ?>
				</table>
			</div>
		</div>
	</div>

	<div class="push"></div>
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
		<h2>Follow Us on</h2>
		<li><i class="fab fa-facebook" style="font-size:30px"> </i>
			<i class="fab fa-instagram" style="font-size:30px"> </i>
			<i class="fab fa-twitter" style="font-size:30px"> </i>
			<i class="fab fa-youtube" style="font-size:30px"> </i>
		</li><br><br>
		<h2>Download App</h2>
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