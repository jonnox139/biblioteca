<?php
	session_start ();
	include("includes/usarBD.php");
	$seleccionarC="SELECT nombreCategoria FROM categoria order by nombreCategoria Asc;";
	$seleccionarCScript=mysql_query($seleccionarC, $conexion);
	$idCat=$_GET["ddLibroTitulo"];
	
?>
<script language="javascript">
	function ir(pagina)
	{
		document.ingresarMismo.action=pagina;
		document.ingresarMismo.submit();
	}
</script>
<style type="text/css">
.definicion
{
	padding: 0 2px;
	margin-left: 0;
	width: 16em;
	font: normal 1.0em Verdana, sans-serif;
}
.contenido
{
	background-color:transparent;
	background: url() no-repeat;
	border: 1px solid blue;
	height: 120px;
	font: 0.8em verdana;
}
</style>
<form action="" name="ingresarMismo" method="get">
	<table align="center">
		<tr>
			<td align="center"><a class="definicion"><b>Seleccione un Libro:</b></a><br>
			<select name="ddLibroTitulo">
			<?php 
			$libros="SELECT * FROM libros WHERE idCategoria='".$idCat."' ORDER BY Titulo;";
			$seleccionarScript=mysql_query($libros, $conexion);
			if($idCat)
			{
				while($sl=mysql_fetch_array($seleccionarScript, MYSQL_ASSOC))
				{
					?>
					<option value="<?php echo($sl["Titulo"]);?>"><?php echo($sl["Titulo"]);?></option>
					<?php
				}
				?>
				<tr>
				<td colspan="2" align="center"><input type="checkBox" onClick="javascript:ir('scriptAgregarMismo.php');" name="ckAgregar"><a class="definicion">Agregar el Libro</a></td>
				</tr>
				<?php
			}
			else
			{
				?>
				<option value="">Seleccione una</option>
				<?php
			}
			?>
			</select>
			</td>
			</tr>		
			</table>	
</form>
