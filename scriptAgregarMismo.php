<?php
	session_start ();
	include("includes/usarBD.php");
	$tituloLibroDD=$_GET["ddLibroTitulo"];
	$masUnoCK=$_GET["ckAgregar"];
	$seleccionar="SELECT Stock FROM libros WHERE Titulo= '".$tituloLibroDD."';";
	$seleccionarScript=mysql_query($seleccionar, $conexion);
	while($sl=mysql_fetch_array($seleccionarScript, MYSQL_ASSOC))
	{
		$add=$sl["Stock"]+1;
		$consulta= "SELECT Titulo FROM libros WHERE Titulo= '".$tituloLibroDD."';";
		$consultar = mysql_query($consulta, $conexion);
		$consulta2= "UPDATE libros SET Stock='".$add."' WHERE Titulo= '".$tituloLibroDD."';";
		$consultar2 = mysql_query($consulta2, $conexion);
		if($consultar2)
		{
			?>
		<body onload="javascript:reload();">
		<form action="agregarLibros.php" name="retornar" target="_top">
			<script language="javascript">
			function reload()
			{
				alert("Libro Agregado Exitosamente");
				document.retornar.submit();
				
			}
			</script>
		</form>
		</body>
	<?php
		}
	}
?>