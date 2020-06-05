<?php
	session_start ();
	include("includes/usarBD.php");
	$seleccionar="SELECT * FROM libros ORDER BY idLibro";
	$seleccionarLibroScript=mysql_query($seleccionar, $conexion);
?>
<script language="javascript">
	function ir(pagina)
	{
		document.formEliminarlibro.action=pagina;
		document.formEliminarlibro.submit();
	}
</script>
<style type="text/css">
.botonImagen
{
	background-image:url(imagenes/regresar.png);
	background-repeat:no-repeat;
	height:75px;
	width:150px;
	background-position:center;
}
</style>
<form target="_top" action="administrador.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">
		<input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
		<input type="submit" value="" class="botonImagen"/>
	</form>
<form action="" method="get" name="formEliminarlibro">
	<table align="center" border="1">
	<tr bgcolor="#aaa"><th>Cod.</th><th>Titulo del Libro</th><th>Eliminar<br>Completo</th><th>Eliminar <br>Unidad</th></tr>
	<?php
	while($del=mysql_fetch_array($seleccionarLibroScript, MYSQL_ASSOC))
	{
		echo("<tr><td align='center'>".$del['idLibro']."</td>");
		echo("<td>".$del['Titulo']."</td>");
		?><td align="center"><input type='checkbox' name='eliminarLibroTodo' value="<?php echo($del['Titulo']); ?>" onClick="javascript:ir('eliminarLibroScript.php');" title="Eliminar '<?php echo($del['Titulo']); ?>' de la Biblioteca"></td>
		<?php
		if($del['Stock']==1)
		{
			$lib="Libro";
		}
		else
		{
			$lib="Libros";
		}
		?><td align="center"><input type='checkbox' name='eliminarUnidad' value="<?php echo($del['Titulo']); ?>" onClick="javascript:ir('eliminarUnidadLibro.php');" title="<?php echo($del['Stock']); ?><?php echo(" ".$lib); ?>"></td></tr>
		<?php
	}
	?>
	</table>
</form>