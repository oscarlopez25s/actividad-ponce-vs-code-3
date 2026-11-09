<?php
include("cn.php");
$id =$_GET["id"];
$usuarios = "select * from usuarios";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>actualizar </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
    <body>
        <form class="container-table container-table-edit" action="procesar_actuakuzar.php" method="post">
            <div class="table-title" table-title-edit>Datos del usuario</div>
            <div class="table-header">Nombre</div>
            <div class="table-header">Apellidos</div>
            <div class="table-header">Direccion</div>
            <div class="table-header">Telefono</div>
            <div class="table-header">Operación</div>
            <?php $resultado = mysqli_query ($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <input type="hidden" class="type-item" value="<?php echo $row["id"];?>" name="id">
            <input type="text" class="table-input" value="<?php echo $row["Nombre"];?>" name="nombre">
            <input type="text" class="table-input" value="<?php echo $row["Apellidos"];?>" name="apeliidos">
            <input type="text" class="table-input" value="<?php echo $row["Direccion"];?>" name="direccion">
            <input type="text" class="table-input" value="<?php echo $row["Telefono"];?>" name="telefono">
            <?php } mysqli_free_result ($resultado);?>
            <input type="submit" value="Actualizar" class="container-submit container-submit-actualizar">
        </form>
    </body>
</html>
