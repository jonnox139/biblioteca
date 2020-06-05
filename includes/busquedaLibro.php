<?php
	$q=$_GET["q"];
	include("usarBD.php");
if (!$conexion)
  {
  die('Conexion Erronea: ' . mysql_error());
  }
  $consulta="SELECT * FROM libros where Titulo like '%$q%' or idLibro like '%$q%' or Autor like '%$q%';";
  $result = mysql_query($consulta);
  $numeroDeRegistros = mysql_num_rows($result);
  if($result);
  {
?>
  	<table name="tablaLibros" id="tablaLibros" border="1" align="center">
	<tr bgcolor="A0A7CC">
		<th align="center" width="30">Codigo</th>
		<th align="center" width="250">Titulo</th>
		<th align="center" width="150">Autor</th>
		<th align="center" width="100">Editorial</th>
		<th align="center" width="70">Existencia</th>
	</tr>
		<?php 
		while($Wlibros=mysql_fetch_array($result, MYSQL_ASSOC))
		{
			echo ("<tr><td align='center'><b>".$Wlibros["idLibro"]."</b></td>");
			echo ("<td>".$Wlibros["Titulo"]."</td>");
			echo ("<td>".$Wlibros["Autor"]."</td>");
			echo ("<td>".$Wlibros["Editorial"]."</td>");
			echo ("<td align='center'>".$Wlibros["Stock"]."</td></tr>");
		}
		?>
	</table> 
	<?php
	
}
mysql_close($conexion);
?> 