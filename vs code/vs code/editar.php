<?php
include("cn.php");
$usuarios = "select * from usuarios";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>EDITAR CRUD CON PHP Y MYSQL </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
    <body>
        <div class="container-table container-table-edit">
            <div class="table-title" table-title-edit>Datos del usuario<a herf="editar.php" class="title_edit">Editar>/</a></div>
            <div class="table-header">Nombre</div>
            <div class="table-header">Apellidos</div>
            <div class="table-header">Direccion</div>
            <div class="table-header">Telefono</div>
            <div class="table-header">Operación</div>
            <?php $resultado = mysqli_query ($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <div class="table-item"><?php echo $row["Nombre"];?> </div>
            <div class="table-item"><?php echo $row["Apellidos"];?> </div>
            <div class="table-item"><?php echo $row["Direccion"];?> </div>
            <div class="table-item"><?php echo $row["Telefono"];?> </div>
            <div class="table-item">
                <a href="editar.php?id=<?php echo $row["id"];?>">Editar</a>
                <a href="eliminar.php?id=<?php echo $row["id"];?>">Eliminar</a>
            </div>
            <?php } mysqli_free_result ($resultado);?>
        </div>
        <script src="js/comfirmar.js"></script>
    </body>
</html>

