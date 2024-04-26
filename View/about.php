<?php session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Classic Pizza</title>
    <!-- fonts links-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="../Assets/styles/main.css" rel="stylesheet" type="text/css">
    <link href="../Assets/styles/about.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="../Assets/images/logo.jpg" />
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
                <h1 id="classic">~ Acerca de ~</h1>
            </div>
            <p> Classic Pizza, familia de Yumm! Brands, es la mayor empresa pizzera del mundo y el hogar de la pizza de corteza dorada. Pizza Ranch comenzó hace 60 años en Wichita, Kansas, y hoy en día es una marca global icónica que ofrece más pizza, pasta y alitas que cualquier otro restaurante en el mundo.</p>

            <p>La marca Pizza Ranch es una marca global icónica que ofrece más pizza, pasta y alitas que cualquier otro restaurante en el mundo.

            <p>Desde su creación en 1993, Classic Pizza se ha convertido rápidamente en un nombre muy conocido en Sri Lanka. Con su primer restaurante en Union Place, Colombo 7, Classic Pizza se convirtió en la primera cadena internacional de restauración en empezar a operar en Sri Lanka. Classic Pizza es una marca perteneciente a la cadena mundial de restauración Yumm Brands Incorporated, con sede en Estados Unidos. Se trata de la mayor empresa de restauración del mundo, propietaria también de KFC y Taco Ball.

            <p>En 1999, Classic Pizza se aventuró en el servicio a domicilio marcando otro hito innovador en Sri Lanka. Con el lanzamiento de su línea directa de reparto en toda la isla 011 2 727727, el reparto de Classic Pizza creció rápidamente hasta representar el 50% de las ventas netas del restaurante.

            <p>Hasta la fecha, Classic Pizza Sri Lanka emplea a más de 1.800 trabajadores de diversas procedencias. Como empleador que ofrece igualdad de oportunidades, Classic Pizza destina el 1% de sus ingresos anuales a formación y bienestar. La empresa cree firmemente en la creación de un entorno de trabajo divertido y orientado a los resultados.

            <p>En los últimos 24 años, Classic Pizza ha crecido con fuerza. En Classic Pizza, creemos en deleitar los sentidos de todos y cada uno de nuestros clientes. Por este motivo, todos los locales ofrecen una experiencia única y familiar, a la vez que captan el paladar gastronómico del consumidor de Sri Lanka con innovaciones en su menú. En la actualidad, Classic Pizza sirve una amplia gama de pizzas con una interesante selección de cortezas especiales, así como aperitivos, pastas, arroces, postres y bebidas. </p>
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