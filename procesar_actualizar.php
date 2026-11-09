<?php
include("cn.php");

$id =$_POST['id'];
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$direccion =$_POST['direccion'];
$telefono =$_POST['telefono'];

//actualizar datos
$actualizar = "UPDATE usuarios SET Nombre='$nombre',Apellidos='$aplellidos', Direccion='$direccion', Telefono='$telefono' where id=$id";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script> alert('Se han actualizado los cambios correctamente, actualice la páguina para ver los cambios'); window.location='/index.php' </script>";
} else {
    echo "<script> alert('No se pudo actualizar los cambios');window.location='/index.php'</script>";
}
?>