<?php
include("cn.php");

$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];

$insert = "INSERT INTO usuarios(Nombre, Apellidos, Direccion, Telefono) VALUES('$nombre', '$apellidos', '$direccion', '$telefono')";

$resultado = mysqli_query($conexion, $insert);

if($resultado){
    echo "<Script>alert('se ha registrado con exito el usuario');
    window.location='/index.php'</script>";
}else{
    echo "<Script>alert('No se pudo registrar');window.history.go(-1);</script>";
}

?>