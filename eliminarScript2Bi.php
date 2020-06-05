<?php
	session_start ();
	include("includes/usarBD.php");
	if($_POST["bb"]=="Si")
	{
		$eliminarBi="DELETE FROM bibliotecario WHERE id_empleado='".$_SESSION["ckBi"]."';";
		$eliminarBiScript = mysql_query($eliminarBi, $conexion);
		if($eliminarBiScript)
		{
			?>
			<body onload="javascript:reload();">
			<form action="administrador.php" name="retornar" target="_top">
				<script language="javascript">
				function reload()
				{
					alert("Empleado Eliminado Completamente");
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
			<form action="administrador.php" name="retornar2" target="_top">
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