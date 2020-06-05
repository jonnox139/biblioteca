<?php
	session_start ();
	include("includes/usarBD.php");
	$clave=$_POST["idCarrito"];
	$eliminarDeCanasta="DELETE FROM prestamo WHERE idLibro='".$clave."';";
	$scriptEliminarDeCanasta = mysql_query($eliminarDeCanasta, $conexion);
	if($scriptEliminarDeCanasta)
	{
		?>
		<body onload="javascript:reload();">
		<form action="verCarritoLibros.php" name="retornar" target="_top">
			<script language="javascript">
			function reload()
			{
				alert("Eliminado de Canasta");
				document.retornar.submit();
				
			}
			</script>
		</form>
		</body>
	<?php
	}
?>