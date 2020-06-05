<?php
	session_start ();
	include("includes/usarBD.php");
	if($_GET["bb"]=="Si")
	{
		$eliminarLibro="DELETE FROM libros WHERE Titulo='".$_SESSION["eliminarLibroTodo"]."';";
		$eliminarLibroScript = mysql_query($eliminarLibro, $conexion);
		if($eliminarLibroScript)
		{
			?>
			<body onload="javascript:reload();">
			<form action="eliminarLibros.php" name="retornar" target="_top">
				<script language="javascript">
				function reload()
				{
					alert("Libro Eliminado Completamente de la Biblioteca");
					document.retornar.submit();
					
				}
				</script>
			</form>
			</body>
		<?php
		}
	}
	else
	{
	?>
		<body onload="javascript:reload2();">
			<form action="eliminarLibros.php" name="retornar2" target="_top">
				<script language="javascript">
				function reload2()
				{
					document.retornar2.submit();
					
				}
				</script>
			</form>
		</body>
	<?php
	}
?>