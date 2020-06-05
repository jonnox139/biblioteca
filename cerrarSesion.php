<?php
session_start();
include("includes/usarBD.php");
$eliminacion="DELETE FROM prestamo WHERE carnet= '".$_SESSION["txUsuario"]."';";
$scriptEliminarDeCanasta = mysql_query($eliminacion, $conexion);
session_destroy();
header("Location:index.php");
?>


