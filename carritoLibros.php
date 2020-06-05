<?php
session_start ();
	include("includes/usarBD.php");
	$clave=$_POST["identificadorLibro"];
	$conectado=mysql_connect("localhost", "root", "mysql");
	mysql_select_db("biblioteca", $conexion);
	$insertarCanasta="INSERT INTO prestamo (idLibro, carnet, Estado) VALUES ('".$clave."', '".$_SESSION["txUsuario"]."', 'En Canasta');";
	$scriptInsertarCanasta = mysql_query($insertarCanasta, $conexion);
	if($scriptInsertarCanasta)
	{
		?>
		<body onload="javascript:reload();">
		<form action="alumnosBiblio.php?<?php echo (session_name());;?>=<?php echo(session_id()); ?>" name="retornar" target="_top">
			<script language="javascript">
			function reload()
			{
				alert("Libro Agregado Exitosamente a Canasta");
				document.retornar.submit();	
			}
			</script>
		</form>
		</body>
	<?php
	}
?>