<?php
	session_start ();
	include("includes/usarBD.php");
	$clave=$_POST["idBorrarLibro"];
	$eliminarDeCanasta="DELETE FROM prestamo WHERE idLibro='".$clave."';";
	$scriptEliminarDeCanasta = mysql_query($eliminarDeCanasta, $conexion);
	if($scriptEliminarDeCanasta)
	{
		?>
		<body onload="javascript:reload();">
		<form action="alumnosBiblio.php?<?php echo (session_name());;?>=<?php echo(session_id()); ?>" name="retornar" target="_top">
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