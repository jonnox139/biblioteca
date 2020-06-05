<?php
	session_start ();
	include("includes/usarBD.php");
	$seleccionarC="SELECT * FROM categoria order by nombreCategoria Asc;";
	$seleccionarCScript=mysql_query($seleccionarC, $conexion);
	

?>
<script language="javascript">
	function ir(pagina)
	{
		document.ingresarMismo.action=pagina;
		document.ingresarMismo.submit();
	}
	function enviarInfo()
	{
		document.ingresarMismo.submit();
	}
</script>
<style type="text/css">
body
{
	background: url('imagenes/green.jpg');
}
.definicion
{
	padding: 0 2px;
	margin-left: 0;
	width: 16em;
	font: normal 1.0em Verdana, sans-serif;
}
.textBox
{
	background-color:transparent;
	background: url() no-repeat;
	border: 1px solid blue;
	height: 24px;
	width:180px;
	font: 0.8em verdana;
}
.contenido
{
	background-color:transparent;
	background: url() no-repeat;
	border: 1px solid blue;
	height: 120px;
	font: 0.8em verdana;
}
.boton
{
	background-color:transparent;
	border: 1px solid lightblue;
	font: 1em verdana;
	border-bottom: 0.3em solid #12a;
	border-right: 0.3em solid #17a;
}
.botonImagen
{
	background-image:url(imagenes/regresar.png);
	background-repeat:no-repeat;
	height:75px;
	width:150px;
	background-position:center;
}
hr 
{
	color: #1E90FF;
	background-color: #1E90FF;
	height: 1px;
	width:40%;
	border: 16;
	margin: auto;
	text-align: center;
}
</style>
<form action="scriptIngresarlibro.php" name="ingresarLibroForm" method="get">
<center><font size="4"  color="blue" face="verdana">Ingreso de Libros NO Existentes</font>
<br>
<br>
</center>
<br>

<table align="center">
	<tr>
		<td><a class="definicion">Titulo:</a></td>
		<td><input type="text" name="txTitulo" id="txTitulo" class="textBox"></td>
	</tr>
	<tr>
		<td><a class="definicion">Autor:</a></td>
		<td><input type="text" name="txAutor" id="txAutor" class="textBox"></td>
	</tr>
	<tr>
		<td><a class="definicion">Editorial:</a></td>
		<td><input type="text" name="txEditorial" id="txEditorial" class="textBox"></td>
	</tr>
	<tr>
		<td><a class="definicion">Paginas:</a></td>
		<td><input type="text" name="txPaginas" id="txPaginas" class="textBox"></td>
	</tr>
	<tr>
		<td><a class="definicion">Categoria:</a></td>
		<td>
		<select name="ddCategoria" id="ddCategoria">
		<option value="">Seleccione una</option>
		<?php
			$cc="SELECT * FROM Categoria Order By nombreCategoria;";
			$cScript=mysql_query($cc);
			while($ct=mysql_fetch_array($cScript, MYSQL_ASSOC))
			{
		?>
			<option value="<?php echo($ct["idCategoria"]); ?>"><?php echo($ct["nombreCategoria"]); ?></option>
		<?php
			}
		?>
		</select></td>
	</tr>
	<tr>
		<td><a class="definicion">Contenido:</a></td>
		<td><textarea name="txContenido" id="txContenido" class="contenido"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="btnIngresar" class="boton" value="Ingresar Libro"></td>
	</tr>
</table>
</form>
<hr color="lighblue" />
<br>
<form action="agregarLibrosN.php" name="ingresarMismo" target="consultaSelect">
	<center><font size="4"  color="blue" face="verdana">Ingreso de Libros YA Existentes</font></center>
	<br>
	<table align="center">
	<td><a class="definicion"><b>Seleccione una Categor&iacute;a: </b></a></td>
		<td>
			<select name="ddLibroTitulo" onChange="javascript:enviarInfo();">
			<option value="">Seleccione una</option>
			<?php 
			while($sl=mysql_fetch_array($seleccionarCScript, MYSQL_ASSOC))
			{
				?>
				<option value="<?php echo($sl["idCategoria"]);?>"><?php echo($sl["nombreCategoria"]);?></option>
			<?php
			}
			?>
			</select>
			</td>
		</tr>
		
			</table>
			<center><iframe src="agregarLibrosN.php" frameborder="0" width="40%" height="15%" name="consultaSelect"></iframe></center>
			
</form>

<!-- MANTIENE LA SESION! -->
<form action="administrador.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">
<input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
	<input type="submit" value="" class="botonImagen"/>
</form>
<!--FIN DEL BOTON-->