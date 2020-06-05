<?php
	ob_start("ob_gzhandler");
	session_start ();
	include("includes/usarBD.php");
	$seleccion = $_POST["ddSeleccion"];
	$elemento = $_POST["txBuscar"];
	if($seleccion=="idLibro")
	{
		$busqueda = "SELECT * FROM libros WHERE ".$seleccion. "='".$elemento."';";
	}
	else
	{
		$busqueda = "SELECT * FROM libros WHERE ".$seleccion. " like '%".$elemento."%';";
	}
	$busquedaScript = mysql_query($busqueda, $conexion);
	$contar="SELECT * from Prestamo WHERE carnet= '".$_SESSION["txUsuario"]."';";
	$contarScript=mysql_query($contar, $conexion);
	$numeroDeRegistros = mysql_num_rows($contarScript);
?>
<style type="text/css">
BODY{background:#FFFFFF;}
.mensaje
{
	font-family:arial;
	font-size:28px;
	align:center;
}
.submitImagen
{
	background-image:url(productonoagregado.gif);
	background-repeat:no-repeat;
	height:30px;
	width:130px;
	color:white;
	font-size:1px;
	background-position:center;
	border-color:red;
}
.submitImagenBorrar
{
	background-image:url(productoagregado.gif);
	background-repeat:no-repeat;
	height:30px;
	width:130px;
	color:white;
	font-size:1px;
	background-position:center;
	border-color:red;
}
.definiciones
{
	font-family:verdana;
	font-size:14px;
}
.valores
{
	font-family:verdana;
	font-size:14px;
	font-weight: bold;	
}


.button, .button:visited { /* botones genéricos */
display: inline-block;
padding: 5px 10px 6px;
color: #DDD;
text-decoration: none;
-moz-border-radius: 16px;
-webkit-border-radius: 12px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-top: 0px;
border-left: 0px;
border-right: 0px;
border-bottom: 1px solid rgba(0,0,0,0.25);
cursor:pointer;
}

button::-moz-focus-inner,
input[type="reset"]::-moz-focus-inner,
input[type="button"]::-moz-focus-inner,
input[type="submit"]::-moz-focus-inner,
input[type="file"] > input[type="button"]::-moz-focus-inner {
border: none;
}


.button:active{ /* el efecto click */
top: 13px;
}
/* botones medianos */
.button, .button:visited,.medium.button, .medium.button:visited {
font-size: 13px;
font-weight: bold;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
}

.blue.button, .blue.button:visited { background-color: #2981E4; }
.blue.button:hover{ background-color: #2575CF; }

</style>
	<?php 
	if(isset($elemento))
	{
		while($datos = mysql_fetch_array($busquedaScript, MYSQL_ASSOC))
		{
			?>
			<table align="center" name="resultados" border="0">
			<tr>
				<td colspan="2" align="center">
				<form action="datosLibro.php" name="datosLibro" id="datosLibro" method="post">
						<input type="submit"  title="Ver Datos del Libro" class="button medium blue" value="<?php echo($datos["Titulo"]);?>" name="dL"/></form>
				</td>
			</tr>
			<tr>
				<td><a class="definiciones">Autor:</a></td>
				<td><a class="valores"><?php echo($datos["Autor"]); ?></a></td>
			</tr>
			<tr>
				<td><a class="definiciones">Editorial:</a></td>
				<td><a class="valores"><?php echo($datos["Editorial"]); ?></a></td>
			</tr>
			<tr>
				<td><a class="definiciones">P&aacute;ginas:</a></td>
				<td><a class="valores"><?php echo($datos["Paginas"]); ?></a></td>
			</tr>
			<?php
			if($datos["Stock"]>6)
			{
			?>
			<tr>
				<td colspan="2" align="center"><font color="green"><b><?php echo($datos["Stock"]); ?> Ejemplares</b></font></td>
			</tr>
			<?php
			}
			if($datos["Stock"]>3 && $datos["Stock"]<=6)
			{
			?>
			<tr>
				<td colspan="2" align="center"><font color="yellow"><b><?php echo($datos["Stock"]); ?> Ejemplares</b></font></td>
			</tr>
			<?php
			}
			if($datos["Stock"]>1 && $datos["Stock"]<=3)
			{
			?>
			<tr>
				<td colspan="2" align="center"><font color="red"><b><?php echo($datos["Stock"]); ?> Ejemplares</b></font></td>
			</tr>
			<?php
			}
			if($datos["Stock"]==1)
			{
			?>
			<tr>
				<td colspan="2" align="center"><font color="red"><b><u>Disponible solo en Sala</u></b></font></td>
			</tr>
			<?php
			}
			if($datos["Stock"]==0)
			{
				?><tr><td align="center" colspan="2"><font color="red"><b>Libro Agotado!.....</b></font></td></tr>
					<?php
			}
			else
			{
			if($numeroDeRegistros <= 3)
			{
				$encontrarID="SELECT idLibro, carnet FROM prestamo WHERE idLibro='".$datos["idLibro"]."' AND carnet= '".$_SESSION["txUsuario"]."';";
				$encontrarIDScript = mysql_query($encontrarID, $conexion);
				if($ing = mysql_fetch_array($encontrarIDScript))
				{
					?>
					<tr><td align="center" colspan="2">
					<form action="borraCarLibros.php" name="formBorrarBusqueda" id="formBorrarBusqueda" method="post">
						<input type="submit" class="submitImagenBorrar" title="Quitar de la Canasta" value="<?php echo($datos["idLibro"]);?>" name="idBorrarLibro"/></form>
					</td></tr>
					<?php
				}
				else
				{
					?>
				<tr><td align="center" colspan="2">
				<form action="carritoLibros.php" name="formResultadosBusqueda" id="formResultadosBusqueda" method="post">
					<input type="submit" class="submitImagen" title="Agregar a Canasta" value="<?php echo($datos["idLibro"]);?>" name="identificadorLibro"/></form>
				</td></tr>
				<?php				
				}
			}
			else
			{
				?>
				<tr><td align="center" colspan="2"><b><i>Elimina un Libro</i></b></td></tr>
				<?php
			}				
			?>
			<tr><td colspan="2" align="center"><hr color="red" /><hr color="lightblue"/></td></tr>
			</table>
			<?php
		}
		}
	}
	else
	{
		echo("<center><img src='imagenes/busqueda.jpg' /></center>");
	}
	mysql_close($conexion);
	ob_end_flush();
?>