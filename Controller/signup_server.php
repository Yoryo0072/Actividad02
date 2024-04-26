
<?php
if (isset($_POST['signup']) && !isset($_SESSION['username'])) {

	session_start();
	require '../Config/config.php';

	$user = $_POST['user'];
	$fullname = $_POST['fulnme'];
	$email = $_POST['eml'];
	$password = $_POST['pwd'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$dob = $_POST['bd'];
	$address = $_POST['addrs'];
	$crednum = $_POST['crednum'];
	$cvn = $_POST['cvn'];
	$exp = $_POST['exp'];

	$u = "select * from userinfo where user = '$user';";
	$result1 = mysqli_query($conn, $u);

	$e = "select * from userinfo where email = '$email';";
	$result2 = mysqli_query($conn, $e);

	if (mysqli_num_rows($result1) == 1 && mysqli_num_rows($result2) == 1) {
		echo '<script>alert("El nombre de usuario y la dirección de correo electrónico ya existen")</script>';
		echo '<script>window.location="signup.php"</script>';
		exit();
	} else if (mysqli_num_rows($result1) == 1) {
		echo '<script>alert("El nombre de usuario ya existe")</script>';
		echo '<script>window.location="signup.php"</script>';
		exit();
	} else if (mysqli_num_rows($result2) == 1) {
		echo '<script>alert("El correo electrónico ya existe")</script>';
		echo '<script>window.location="signup.php"</script>';
		exit();
	} else {
		$reg = "insert into userinfo(user,fullname,password,email,phone,city,gender,dob,address,crednum,cvn,exp) values('$user','$fullname',MD5('$password'),'$email','$phone','$city','$gender','$dob','$address',MD5('$crednum'),MD5('$cvn'),'$exp');";
		$reg = mysqli_query($conn, $reg);
		echo '<script>alert("¡Registro realizado con éxito!")</script>';
		echo '<script>window.location="../View/login.php"</script>';
	}
} else {
	header("location:signup.php");
}
?>
