<?php
	session_start ();
	include("includes/usarBD.php");
	$_SESSION["eliminarLibroTodo"]=$_GET["eliminarLibroTodo"];
?>
<script language="javascript">
	function mandar(pagina)
	{
		document.eliminarLibro.action=pagina;
		document.eliminarLibro.submit();
	}
</script>

	<form action="" name="eliminarLibro" method="GET">
	<center><b>�Esta Seguro de Querer Borrar el Libro: <font color="red"><?php echo($_SESSION["eliminarLibroTodo"])?></font>?</b><br>
	<i>Tenga en cuenta, que esta Acci&oacute;n no ser&aacute; desecha.</i><br>
	<select name="bb" multiple size="2" ><option height="300" value="Si" onClick="javascript:mandar('eliminarScript2.php');">Si</option><option value="No" onClick="javascript:mandar('eliminarScript2.php');">No</option></select>
	<hr width="40%" color="#f2a"/>
	</center>
	</form>
	