<?php

require_once "api/bd.php";
$conexion=conectar();
$message = '';
if (!empty($_POST['nombre-txt']) && !empty($_POST['correo-txt'] && !empty($_POST['clave-txt']) && !empty($_POST['telefono-txt']))) {
  $nombre=$_POST['nombre-txt'];
  $correo=$_POST['correo-txt'];
  $telefono=$_POST['telefono-txt'];
  $password=sha1($_POST['clave-txt']);
  $rolId=2;
  $sql="INSERT into usuarios (correo,clave,nombre,telefono,rol_id)
  values ('$correo','$password','$nombre','$telefono','$rolId')";
  echo $result=mysqli_query($conexion,$sql);
  $message = "Te has registrado con exito";
}

function buscaRepetido($user,$pass,$conexion){
  $sql="SELECT * from usuarios
  where correo='$correo' and clave='$password'";
  $result=mysqli_query($conexion,$sql);

  if(mysqli_num_rows($result) > 0){
    return 1;

  }else{
    return 0;
    $error = "Datos incorrectos";

  }
}


?>

<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>OM Illapel || Registro</title>


  <!-- Favicons -->
  <link href="assets/img/house.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="icon" href="img/icon.ico">
  <title>Login Wachimingo</title>
</head>
<body class="bg-login">

  <main>
    <form method="POST" class="row mt-5" >


      <div class="col-lg-9 col-md-6 col-sm-10 mx-auto">
      <div class="card bg-color1">
        <?php if(!empty($message)): ?>
          <div class="alert text-success mt-3" role="alert"> <?= $message ?></div>
        <?php endif; ?>
        <img class="img-fluid2" src="assets/img/house.png">
        <div class="logo center">
          <h1 class="text-light">OM ILLAPEL<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <div class="card-body">
          <div class="form-group text-white">
            <label for="nombre-txt" class="pl-2">Usuario</label>
            <input type="text" class="form-control" required name="nombre-txt" value="">
          </div>
          <div class="form-group text-white">
            <label for="correo-txt" class="pl-2">Correo</label>
            <input type="email" class="form-control"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required name="correo-txt" value="">
          </div>
          <div class="form-group text-white">
            <label for="clave-txt" class="pl-2">Contraseña</label>
            <input type="password" class="form-control" required name="clave-txt" value="">
          </div>
          <div class="form-group text-white">
            <label for="telefono-txt" class="pl-2">Telefono</label>
            <input type="tel" pattern="[0-9]{9}" class="form-control" required name="telefono-txt" value="9">
          </div>

          <?php if(isset($error)){
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
              <span class="text-danger"><?php echo $error; ?></span>
            </div>
            <?php
             } ?>

          <div class="register-button float-left">
            <button type="submit" class="btn btn-primary"value="submit">Registrarse</button>
          </div>
          <div class="register-button float-right">
            <button type="submit" class="btn btn-success" onclick="location.href='login.php' ">Ingresar</button>
          </div>

        </div>
      </div>

      </div>
    </form>

  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
