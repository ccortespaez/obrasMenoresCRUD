
<?php
session_start(); //agregar para usar la sesion
if(!isset($_SESSION["rol"])){
  header("Location:login.php");
  exit();
}

$usuario = $_SESSION["rol"];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OM Illapel</title>


  <!-- Favicons -->
  <link href="assets/img/house.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/js/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/js/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/js/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/js/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">OM ILLAPEL<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="TrabPrevios.php">Trabajos</a></li>
          <li><a href="construye.php">Construye con nosotros</a></li>
          <li><a href="cotizador.php">Presupuesta</a></li>
          <li><a href="https://api.whatsapp.com/send?phone=56963581745&text=Hola,%20Quiero%20saber%20mas%20informacion%20sobre%20los%20servicos%20que%20ofrece%20">Contactar via Wsp</a></li>
          <li ><a><img src="assets/img/person.png" class="img-user pr-2" alt="">Bienvenido <?php echo $usuario->nombre; ?></a></li>
          <li ><a href="cerrar_sesion.php"><img src="assets/img/exit.png" class="img-user pr-2" alt="">Salir</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
