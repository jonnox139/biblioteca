<?php
	session_start ();
	include("includes/usarBD.php");
	$clave=$_POST["dL"];
	$seleccionIndividual="SELECT * FROM libros WHERE Titulo='".$clave."';";
	$seleccionIndividualScript=mysql_query($seleccionIndividual, $conexion);
	$numeroDeRegistros = mysql_num_rows($seleccionIndividualScript);
	$mostrar=mysql_fetch_array($seleccionIndividualScript);
	echo("<center>");
	echo("<table width='40%' cellspacing='1' cellpadding='2'>");
	echo("<tr><td align='right' colspan='2'><a class='rs'>Codigo: </a><a class='pr'>".$mostrar["idLibro"]."</a></td></tr>");
	echo("<tr><td colspan='2' align='center'><h2>".$mostrar["Titulo"]."</h2></td></tr>");
	echo("<tr><td width='60'><a class='pr'>Autor:</a></td> <td><a class='rs'>".$mostrar["Autor"]."</a></td></tr>");
	echo("<tr><td><a class='pr'>Editorial:</a> </td> <td><a class='rs'>".$mostrar["Editorial"]."</a></td></tr>");
	echo("<tr><td align='center' colspan='2'><a class='pr'>Cantidad de Paginas: </a><br><a class='rs'>".$mostrar["Paginas"]." Paginas</a><br></td></tr>");
	echo("<tr><td colspan='2' align='center'><font color='blue'><a class='pr'>".$mostrar["Stock"]." Ejemplares</font></a></td></tr>");
	echo("<tr><td colspan='2'><a class='pr'>Contenido: </a> </td> </tr><tr><td colspan='2'><a class='cont'>".$mostrar["Contenido"]."</a></td></tr>");
	echo("</table>");
	echo("</center>");
?>
<style type="text/css">
.pr
{
	font-family: verdana;
	font-weight: bold;
}
.rs
{
	font-family: verdana;
}
.cont
{
	font-family: courier;
}
</style>