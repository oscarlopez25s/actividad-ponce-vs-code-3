<?php
include("cn.php");
$usuarios = "select * from usuarios";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>MOSTRAR CRUD CON PHP Y MYSQL </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
    <body>
        <div class="container-add">
            <h2 class="container-title">registrar usuarios</h2>
            <form action="insertar.php" method="post"
            class="container-form">
                <label for="" class="container-label">Nombre:</label>
                <input name="Nombre" type="text"
                class="container-input">
                <label for="" class="container-label">Apellidos:</label>
                <input name="Apellidos" type="text"
                class="container-input">
                <label for="" class="container-label">Direccion:</label>
                <input name="Direccion" type="text"
                class="container-input">
                <label for="" class="container-label">Telefono:</label>
                <input name="Telefono" type="text"
                class="container-input">
                <input class="container-submit" type="submit" value="registrar">
            </form>
        </div>

        <div class="container-table">
            <div class="table-title">USUARIOS REGISTRADOS<a herf="editar.php" class="title_edit">Editar>/</a></div>
            <div class="table-header">Nombre</div>
            <div class="table-header">Apellidos</div>
            <div class="table-header">Direccion</div>
            <div class="table-header">Telefono</div>
            <?php $resultado = mysqli_query ($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <div class="table-item"><?php echo $row["Nombre"];?> </div>
            <div class="table-item"><?php echo $row["Apellidos"];?> </div>
            <div class="table-item"><?php echo $row["Direccion"];?> </div>
            <div class="table-item"><?php echo $row["Telefono"];?> </div>
            <?php } mysqli_free_result ($resultado);?>
        </div>
        
    </body>
</html>