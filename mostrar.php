<?php require_once "templates/headerTrabajos.php";
    require_once "api/bd.php";
    $conexion = conectar();

?>



<table class="table bg-dark text-white">
    <thead>
    <tr>
        <td>Id</td>
        <td>Titulo</td>
        <td>Descripcion</td>
        <td>fecha</td>
        <td>imagen</td>
        <td>Accion</td>
    </tr>
    </thead>

   
    <tbody>
    <?php 
        $sql="SELECT * from publicacion";
        $result = mysqli_query($conexion,$sql);
        while($mostrar =$result->fetch_array()){
    ?>
        <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['titulo'] ?></td>
        <td><?php echo $mostrar['descripcion'] ?></td>
        <td><?php echo $mostrar['fecha'] ?></td>
        <td><?php echo $mostrar['imagen'] ?></td>
        <td><a href="modificar.php?id=<?php echo $mostrar['id']?>" class="btn btn-secondary">Modificar   </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php require_once "templates/footerTrabajos.php"; ?>