<?php
/*mysqli_connect es para mysql*/
/*pg_conect*/
 $conexion = mysqli_connect("localhost", "root", "", "bd_tabla" );
  mysqli_set_charset($conexion, "utf8");
  if($conexion){
        echo "se conecto correctamente";
  } else {
        echo "ha ocurrido un error";
  }
?>
