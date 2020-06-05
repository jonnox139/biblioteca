<?php
	session_start ();
	include("includes/usarBD.php");
	$tituloLibro=$_GET["txTitulo"];
	$autorLibro=$_GET["txAutor"];
	$editorialLibro=$_GET["txEditorial"];
	$paginasLibro=$_GET["txPaginas"];
	$categoriaLibro=$_GET["ddCategoria"];
	$contenidoLibro=$_GET["txContenido"];
?>
<?php
if($tituloLibro==NULL)
{	
	?>
		<script language="javascript">
			alert("El Campo TITULO, esta Vacio");
			setTimeout("location.href='agregarLibros.php'", 200);
		</script>
	<?php
}
if($editorialLibro==NULL)
{	
	?>
		<script language="javascript">
			alert("El Campo EDITORIAL, esta Vacio");
			setTimeout("location.href='agregarLibros.php'", 200);
		</script>
	<?php
}
if ( is_numeric($paginasLibro)==false) 
{
?>
	<script language="javascript">
	alert("El Campo PAGINAS debe ser Numerico");
	setTimeout("location.href='agregarLibros.php'", 200);
	</script>
	<?php
	exit;
}
?>
<form action="scriptIngresarlibro.php" name="ingresarLibroForm" method="post">
<?php

$buscar="SELECT * FROM libros;";
$buscarScript=mysql_query($buscar, $conexion);
while($buscarLibro=mysql_fetch_array($buscarScript, MYSQL_ASSOC))
{
	$buscarCampo="SELECT Titulo FROM libros WHERE Titulo='".$buscarLibro["Titulo"]."';";
	$buscarCampoScript=mysql_query($buscarCampo, $conexion); //OK
	
	
	$consulta= "SELECT Titulo FROM libros WHERE Titulo= '".$tituloLibro."';";
	$consultar = mysql_query($consulta, $conexion);
	if($biblio = mysql_fetch_array($consultar))
	{
		?>
		<script language="javascript">		
			alert("El Libro YA existe");
			setTimeout("location.href='agregarLibros.php'", 20);
		</script>
		<?php
		exit;
	}
	else
	{
	?>
		<script language="javascript">
			alert("Libro Ingresado de Manera Correcta");
			setTimeout("location.href='agregarLibros.php'", 20);
		</script>
		<?php
		$insercion="INSERT INTO libros(Titulo, Autor, Editorial, Paginas, Stock, Contenido, idCategoria) VALUES ('".$tituloLibro."', '".$autorLibro."', '".$editorialLibro."', '".$paginasLibro."', '1', '".$contenidoLibro."', '".$categoriaLibro."');";
		$insertarScript=mysql_query($insercion, $conexion);
		exit;
	}
}
?>
</form>