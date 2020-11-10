<?php

  require_once "../bd.php";//Importar el archivo bd para conectarse a la base de datos

  //$_GET , $_POST , $_REQUEST , $_SESSION , $_FILES ,

  //Obtencion de los datos para agregarlos a la db en un arreglo asociativo por $_POST
  $titulo = $_POST["titulo"];
  $descripcion = $_POST["descripcion"];
  $fecha = $_POST["fecha"];
  $imagen = $_POST["imagen"];

  //Construir la sentencia SQL
  $sql = "INSERT INTO publicacion(titulo,descripcion,fecha,imagen)"." VALUES(?,?,?,?)";

  //Conectar a la db
  $mysqli = conectar();
  $respuesta = new stdClass(); // la respuesta sera igual a una clase generica sin nada AUN
  if ($mysqli) {//Si es que no fallo
    $st = $mysqli->prepare($sql); //Crear statement, st sera igual a la conexion que prepara el sql
    $st->bind_param("ssss",$titulo,$descripcion,$fecha,$imagen); //Agrega las variables al statement
    $st->execute();//ejecuta el statement
    $st->close();//una vez ejecutado se cierra
    $respuesta->resultado = true; //si se ejecuta exitosamente el resultado sera true
    $respuesta->comentario = "Publicacion agregada exitosamente";
  }else{
    $respuesta->resultado = false;
  }
  echo json_encode($respuesta); //convertimos la respuesta a json
