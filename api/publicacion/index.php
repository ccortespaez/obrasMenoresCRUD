<?php
  require_once "../bd.php";

  $mysqli = conectar();
  $st = $mysqli->prepare("SELECT id,titulo,descripcion,fecha,imagen FROM publicacion");
  $st->execute();
  $result = $st->get_result();

  $lista = array();
  while($fila = $result->fetch_row()){
    $publicacion = new stdClass();
    $publicacion->id = $fila[0];
    $publicacion->titulo = $fila[1];
    $publicacion->descripcion = $fila[2];
    $publicacion->fecha = $fila[3];
    $publicacion->imagen = $fila[4];
    $lista[]=$publicacion;
  }

  $st->close();
  echo json_encode($lista);
