<?php
	session_start ();
	include("includes/usarBD.php");
?>
<style type="text/css">
BODY{background:url('imagenes/bodyppal.jpg');}
.submitImagenBorrar
{
	background-image:url(trash.gif);
	background-repeat:no-repeat;
	height:20px;
	width:20px;
	color:white;
	font-size:1px;
	background-position:center;
	border-color:red;
	vertical-aling:baseline;
}
.palabra
{
	font-size:14px;
	font-family:arial;
}
.palabra2
{
	font-size:14px;
	font-family:courier;
}
</style>
<?php 
	$contar="SELECT p.idLibro, l.Titulo FROM libros l INNER JOIN prestamo p ON (l.idLibro = p.idLibro)WHERE carnet='".$_SESSION["txUsuario"]."';";
	$contarScript=mysql_query($contar, $conexion);
	$numeroDeRegistros = mysql_num_rows($contarScript);
		?> 
		<table border="1" align="center"> 
		<tr bgcolor="#A9A9F5" height="20"> 
			<th align="center" width="25"><a class="palabra">N°</a></th>
			<th align="center" width="207"><a class="palabra">Libro</a></th> 
			<th align="center" width="100"><a class="palabra">Borrar</a></th> 
			<th align="center" width="100"><a class="palabra">Actualizar</a></th> 
		</tr> 
		<?php	
		while($v = mysql_fetch_array($contarScript, MYSQL_ASSOC))
		{
		?>		
		<tr> 
			<td align="center"><font face="arial"><?php echo $v['idLibro'] ?></font> </td> 
			<td><center><font face="arial"><?php echo $v['Titulo'] ?></font></center></td> 
			<td align="center" style="padding-top=8px;margin-top=8px;padding-bottom=8px;margin-bottom=8px">
			<form action="borrarLibrosCarrito.php" name="formBorrar" id="formBorrar" method="post">
				<br><input type="submit" class="submitImagenBorrar" title="Borrar" value="<?php echo($v["idLibro"]);?>" name="idCarrito"/></form>
			<td align="center"> 
			<input name="imageField" type="image" src="actualizar.gif" width="20" height="20" border="0"></td> 
		</tr>
		<?php 
		}
		?>
		<div align="center"><span class="palabra">Libros en Canasta: <b><?php echo ($numeroDeRegistros); ?></b></span> </div><br>
		<div align="center"><span class="palabra2">Continuar Buscando Libros</span> 
		<a href="alumnosBiblio.php?<?php echo (session_name());;?>=<?php echo(session_id()); ?>"><img src="continuar.gif" width="13" height="13" border="0" align="absmiddle"></a>
		</div> 
		<?php
		if($numeroDeRegistros<=3)
		{
		?>
		<center>
		<a href="wssqPrint.php?<?php echo SID;?><?php echo session_id(); ?>"><img src="imprimir.gif" width="135" height="16" border="0" align="absmiddle"></a> 
		</center>
		<?php
		}
		?>
		</table> 
</body> 
</html> 