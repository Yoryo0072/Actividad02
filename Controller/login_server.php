<?php
if (isset($_POST['login']) && !isset($_SESSION['username'])) {
	session_start();
	require '../Config/config.php';

	$user = $_POST['user'];
	$pwd = $_POST['pwd'];

	$s = "select * from userinfo where user = '$user' && password = MD5('$pwd');";
	$result = mysqli_query($conn, $s);

	if (mysqli_num_rows($result) == 1) {
		$_SESSION['username'] = $user;
		$_SESSION['itemcount'] = 0;
		header('location:..');
	} else {
		echo '<script>alert("Nombre de usuario o contraseña incorrectos")</script>';
		echo '<script>window.location="login.php"</script>';
	}
} else {
	header("location:login.php");
}
