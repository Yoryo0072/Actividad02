<?php
session_start();

if (isset($_SESSION['username'])) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Classic Pizza</title>
  <!-- fonts links-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="../Assets/styles/signup.css" rel="stylesheet" type="text/css">
  <link href="../Assets/styles/main.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="../Assets/images/logo.jpg" />
  <script src="../Assets/js/signupvalidation.js" language="javascript" type="text/javascript"></script>
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
    <form class="signup-form" onsubmit="return validate()" action="../Controller/signup_server.php" method="post">
      <div class="form-header">
        <h1>Crear una cuenta</h1>
      </div>

      <div class="form-body">
        <div class="form-group">
          <label class="label-title">Nombre y apellidos: </label><br>
          <input type="text" name="fulnme" id="fulnme" class="forminput" placeholder="Introduzca su nombre completo">
        </div>

        <div class="form-group">
          <label class="label-title">Nombre de usuario: </label><br>
          <input type="text" name="user" id="user" class="forminput" placeholder="Introduzca su nombre de usuario">
        </div>

        <div class="form-group">
          <label class="label-title">Correo electrónico: </label><br>
          <input type="text" name="eml" id="eml" class="forminput" placeholder="Introduzca su dirección de correo electrónico">
        </div>

        <div class="form-group">
          <label class="label-title">Contraseña: </label><br>
          <input type="password" id="pwd" name="pwd" class="forminput" placeholder="Introduzca su contraseña">
        </div>

        <div class="form-group">
          <label class="label-title">Confirmar contraseña: </label><br>
          <input type="password" id="rpwd" name="rpwd" class="forminput" placeholder="Vuelva a escribir su contraseña">
        </div>

        <div class="form-group">
          <label class="label-title">Número de teléfono:</label>
          <input type="text" id="phone" name="phone" class="forminput" placeholder="Introduzca su número de teléfono">
        </div>
        <div class="form-group">
          <label class="label-title">Ciudad: </label><br>
          <select class="forminput" name="city" id="city">
            <option>Santa Cruz </option>
            <option>Cochabamba </option>
            <option>La Paz </option>
            <option>Beni </option>
          </select>
        </div>
        <div class="form-group">
          <label class="label-title">Género: </label>
          <label><input type="radio" name="gender" value="male" id="male" checked>
            <font>Hombre </font>
          </label>
          <label><input type="radio" name="gender" value="female" id="female">
            <font>Mujer </font>
          </label>
        </div>
        <div class="form-group">
          <label class="label-title">Fecha de nacimiento: </label><br>
          <input class="forminputshort" type="text" name="bd" id="bd" placeholder="DD/MM/YYYY">
        </div>

        <div class="form-group">
          <label class="label-title">Dirección: </label><br>
          <input type="text" id="addrs" name="addrs" class="forminput" placeholder="Introduzca su dirección">
        </div>
        <br><br><br>
        <div class="form-group">
          <h2 class="label-title">DATOS DE PAGO </h2><br>
          <label class="label-title">Número de tarjeta de crédito/débito </label>
          <input type="text" name="crednum" id="crednum" class="forminput" placeholder="Número de cc (16 dígitos)"><br>
          <label class="label-title"><br>CVN </label><br>
          <input type="text" id="cvn" name="cvn" class="forminputshort" placeholder="cvn (3 dígitos)"><br><br>
          <label class="label-title">Fecha de EXP </label><br>
          <input type="text" id="exp" name="exp" class="forminputshort" placeholder="MM/YYYY">
        </div>
      </div>
      <div class="form-footer">
        <span><input type="checkbox" required name="agree" id="agree"> Acepto condiciones de uso </span>
        <button type="submit" class="btn" name="signup" value="signup">Regístrarse</button>
      </div>
    </form>
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