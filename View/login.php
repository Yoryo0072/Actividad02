<?php
session_start();

if (isset($_SESSION['username'])) {
  header('location:..');
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Classic Pizza</title>
  <!-- fonts links-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="../Assets/styles/login.css" rel="stylesheet" type="text/css">
  <link href="../Assets/styles/main.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="../Assets/images/logo.jpg" />
  <script src="../Assets/js/loginvalidation.js" language="javascript" type="text/javascript"></script>
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
        <a href="login.php"><span class="fas fa-sign-in-alt"></span> Sign In</a>
      </li>
    </ul>
  </header>
  <div class="push1"></div>

  <div class="wrapper">
    <form class="signup-form" onsubmit="return validate()" action="../Controller/login_server.php" method="post">
      <div class="form-header">
        <h1>Sign-In</h1>
      </div>
      <div class="form-body">
        <div class="form-group">
          <label class="label-title">Nombre de usuario: </label><br>
          <input type="text" name="user" id="user" class="forminput" placeholder="Username">
        </div>

        <div class="form-group">
          <label class="label-title">Contraseña: </label><br>
          <input type="password" id="pwd" name="pwd" class="forminput" placeholder="Password">
        </div>

        <button type="submit" name="login" value="login" class="btn">Iniciar Sesión</button>
      </div>
      <div class="form-footer">
        <a href="signup.php"> <span>¿No tienes cuenta? &nbsp; Regístrese ahora.</span></a>
      </div>
    </form>
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