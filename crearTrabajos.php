<?php require_once "templates/headerTrabajos.php";



?>

<main class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
        <div class="card">
          <div class="card-header bg-cardheader text-white text-center font-cine">

            <img class="img-fluid" src="assets/img/newspaper.png">
            <span class="pr-3">Ingresar Publicaciones</span>
          </div>
          <div class="card-body bg-cardbody">
            <div class="cont-errores">

            </div>

            <div class="form-group">
              <label for="titulo-txt" class="pl-2">Titulo</label>
              <img class="img-fluid" src="assets/img/doc.png">
              <input required type="text" id="titulo-txt" class="form-control">
            </div>

            <div class="form-group">
              <label for="descripcion-txt"class="pl-2">Descripcion</label>
              <img class="img-fluid" src="assets/img/description.png">
              <textarea required id="descripcion-txt"></textarea>
            </div>


            <div class="form-group">
              <label for="fecha-dt" class="pl-2">Fecha</label>
              <img class="img-fluid" src="assets/img/calendar.png">
              <?php $fcha = date("Y-m-d");?>
              <input type="date" id="fecha-dt" required class="form-control" value="<?php echo $fcha;?>" min="<?php echo $fcha;?>" placeholder="dd-mm-yyyy" max="3000-12-12">
            </div>

            <div class="form-group ">
            <label for="imagen-bob" class="pl-2">Nombre Imagen</label>
            <img class="img-fluid">
            <input type="text" id="imagen-bob" class="form-control" value="assets/img/">
          </div>

          <div class="card-footer">
            <button type="button" class="btn bg-cardheader text-white" id="agregar-btn">Agregar</button>
            <button type="button" class="btn bg-color-2 float-right text-white"
              id="limpiar-btn">Limpiar</button>
          </div>
        </div>


    </div>
  </main>
  <?php require_once "templates/footerTrabajos.php"; ?>
