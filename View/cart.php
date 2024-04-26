<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('location:..');
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["cart"] as $keys => $value) {
			if ($value["product_id"] == $_GET["id"]) {
				unset($_SESSION["cart"][$keys]);
				$_SESSION['itemcount'] = $_SESSION['itemcount'] - 1;
				echo '<script>alert("El producto ha sido retirado...")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Classic Pizza</title>
	<!-- fonts links-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="../Assets/styles/main.css" rel="stylesheet" type="text/css">
	<link href="../Assets/styles/cart.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="../Assets/images/logo.jpg" />
	<script src="../Assets/js/ordervalidation.js" language="javascript" type="text/javascript"></script>
</head>

<body>
	<header>
		<div><img id="logo" src="../Assets/images/logo.jpg" alt="logo"></div>
		<div class="nav__links">
			<a href="index.php">Inicio</a>
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
			<?php if ($_SESSION['itemcount'] > 0) { ?>
				<div class="title">
					<h1>~ Mi carrito ~</h1>
				</div>
				<form action="../Controller/ordering_server.php" onsubmit="return validate()" method="post">
					<div class="details">
						<table>
							<?php
							if (!empty($_SESSION["cart"])) {
								$total = 0;
								foreach ($_SESSION["cart"] as $value) {
							?>
									<tr>
										<td class="image">
											<img src="../Assets/images/pizza/<?php echo $value["product_id"]; ?>.jpg">
										</td>
										<td class="name">
											<h1><?php echo $value["item_name"]; ?></h1>
											<h4>Size: <?php echo $value["product_size"]; ?></h4>
											<h2>Quantity: <?php echo $value["item_quantity"]; ?></h2>
											<h3>Rs. <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></h3>
											<div class="del"><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><i class="fas fa-trash-alt"></i></a></div>
										</td>
									</tr>
							<?php
									$total = $total + ($value["item_quantity"] * $value["product_price"]);
								}
							}
							$ordertotal = $total + 120;
							?>
						</table>
					</div>

					<div class="checkout">
						<h1>Resumen del pedido: </h1>
						<hr>
						<table>
							<tr>
								<td class="first">
									<h2>Subtotal del carrito</h2>
									<h3>Gastos de envío*</h3>
									<h1>Bs. <?php echo number_format($total, 2); ?></h1>
									<h4>Bs. 20</h4>
									<hr>
								</td>
							</tr>
							<tr>
								<td class="second">
									<h1>Total del pedido</h1>
									<h2>Bs. <?php echo number_format($ordertotal, 2); ?></h2>
									<input type="hidden" name="payment" value="<?= $ordertotal ?>">
									<hr>
								</td>
							</tr>
							<tr>
								<td class="third">
									<h1>Método de pago</h1>
									<div class="method">
										<label><input type="radio" name="paymeth" value="Credit card" id="credit" checked> &nbsp;<i class="far fa-credit-card"></i></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="radio" name="paymeth" value="Cash on delivery" id="cash"> &nbsp;<i class="far fa-money-bill-alt"></i></label>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fourth">
									<h1>Detalles de la entrega</h1>
									<div class="nme">
										<label class="label-title">Nombre de la persona que recibe: </label><br>
										<input type="text" id="name" name="name" class="forminput" placeholder="enter name">
									</div>
									<div class="add">
										<label class="label-title">Dirección</label><br>
										<input type="text" id="add" name="add" class="forminput" placeholder="enter address">
									</div>
								</td>
							</tr>
							<tr>
								<td class="fifth">
									<button type="submit" class="btn" name="order" value="order">Realizar pedido</button>
								</td>
							</tr>
						</table>
					</div>
				</form>

			<?php } else { ?>
				<img id="empty" src="../Assets/images/cartempty.png">
			<?php } ?>
		</div>
    </div>
			    
        <div class=" push">
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