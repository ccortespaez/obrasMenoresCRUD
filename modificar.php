<?php require_once "templates/headerTrabajos.php";
?>

<?php
  require_once "api/bd.php";
    $conexion = conectar();
$titulo = '';
$descripcion= '';
$fecha = '';
$imagen = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM publicacion WHERE id=$id";
  $result = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($result) == 1) {
    $id = $_GET['id'];
    $mostrar = mysqli_fetch_array($result);
    $titulo = $mostrar['titulo'];
    $descripcion = $mostrar['descripcion'];
    $fecha = $mostrar['fecha'];
    $imagen = $mostrar['imagen'];


  }
}

if (isset($_POST['actualizar'])) {
    $titulo= $_POST['titulo-txt'];
    $descripcion = $_POST['descripcion-txt'];
    $fecha = $_POST['fecha-dt'];
    $imagen = $_POST['imagen-bob'];
    $sql = "UPDATE publicacion set titulo = '$titulo', descripcion = '$descripcion', fecha = '$fecha', imagen = '$imagen' WHERE id=$id";
    mysqli_query($conexion, $sql);
    $message ="Modificado con exito";


  }else{
      $error ="Error al modificar, por favor vuelve a intentarlo";
  }


?>

<main class="container-fluid mt-3">
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">

        <div class="card">
            <div class="card-header">
            <img class="img-fluid" src="assets/img/newspaper.png">
            <span class="pr-3">Modificar Publicacion</span>
        </div>
        <div class="card-body">
        <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="POST" >

          <?php if(!empty($message)): ?>
            <div class="alert text-success mt-3" role="alert"> <?= $message ?></div>
          <?php endif; ?>
            <div class="cont-errores">

              <span><?php $error?></span>
            </div>

            <div class="form-group">
              <label for="titulo-txt" class="pl-2">ID</label>
              <span><?php echo $id?></span>
            </div>

            <div class="form-group">
              <label for="titulo-txt" class="pl-2">Titulo</label>
              <img class="img-fluid" src="assets/img/doc.png">
              <input required type="text"  name="titulo-txt" class="form-control" value="<?php echo $titulo?>">
            </div>

            <div class="form-group">
              <label for="descripcion-txt"class="pl-2">Descripcion</label>
              <img class="img-fluid" src="assets/img/description.png">
              <textarea id="descripcion-txt" type="textarea"  name="descripcion-txt" required class="form-control"><?php echo $descripcion?></textarea>
            </div>
            <div class="form-group">
              <label for="fecha-dt" class="pl-2">Fecha</label>
              <img class="img-fluid" src="assets/img/calendar.png">
              <?php $fcha = date("Y-m-d");?>
              <input type="date" id="imagen-bob" name="fecha-dt" required class="form-control" value="<?php echo $fcha;?>" min="<?php echo $fcha;?>" placeholder="dd-mm-yyyy" max="3000-12-12">
            </div>

            <div class="form-group">
            <label for="imagen-bob" class="pl-2">Nombre Imagen</label>
            <img class="img-fluid">
            <input required type="text" pattern="[a-zA-Z0-9_]+[/][a-zA-Z0-9_]+[/][a-zA-Z0-9_]*[.](png|jpg|jpeg)" id="imagen-bob" name="imagen-bob" class="form-control" value="<?php echo $imagen?>">
            </div>

            <div class="card-footer">
              <button type="submit" name="actualizar"  class="btn bg-cardheader text-white">Actualizar</button>

          </div>


            </form>
        </div>
    </div>
</div>





<?php require_once "templates/footerTrabajos.php"; ?>
