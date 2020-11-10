<?php
    session_start(); //agregar para usar la sesion
    if(!isset($_SESSION["rol"])){
       header("Location:login.php");
       exit();
    }

    $usuario = $_SESSION["rol"];

?>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Favicons -->
  <link href="assets/img/house.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/publicacion.css">
  <link rel="icon" href="img/icon.ico">
  <link rel="stylesheet" href="assets/css/publicacion.css">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <title>OM Illapel || Administrador</title>

</head>
<body class="bg-bodyfondo">

  <div class="modal fade" id="mensaje-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Publicacion agregada</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="alert alert-primary">La Publicacion se agrego con exito.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->

  <header class="text-white">

    <nav class="navbar navbar-expand-lg navbar-light bg-header">
      <a class="navbar-brand  text-white" href="crearTrabajos.php"> <img src="assets/img/house.png" height="60px" alt=""> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gestor de Publicaciones
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="crearTrabajos.php">Ingresar Publicaciones</a>
              <a class="dropdown-item" href="mostrarTrabajosAdm.php">Mostrar Publicaciones</a>
              <a class="dropdown-item" href="mostrar.php">Modificar Publicaciones</a>
            </div>
          </li>



          <li class="nav-item mt-2">
            <img src="assets/img/person.png" class="img-user pr-2" alt=""><p class="text-white">Bienvenido <?php echo $usuario->nombre; ?></p>
          </li>
          <li class="nav-item mt-2">
            <a class="text-white" href="cerrar_sesion.php">Salir<img src="assets/img/exit.png" class="img-user pr-2" alt=""> </a>
          </li>

        </ul>
      </div>
    </nav>


  </header>
