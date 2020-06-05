<?php
session_start();
include("includes/usarBD.php");
?>
<script type="text/javascript" src="js/nm.js"></script>
<script type="text/javascript" src="js/jquery.numeric.js"></script>
<script type="text/javascript">
	$(".numeric").numeric();
	$(".integer").numeric(false, function() { alert("Integers only"); this.value = ""; this.focus(); });
	$(".positive").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
	$(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });
	$("#remove").click(
		function(e)
		{
			e.preventDefault();
			$(".numeric,.integer,.positive").removeNumeric();
		}
	);
</script>
<script language="javascript">
	function val(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[0-9]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
	</script>
<form target="_top" action="bibliotecarios.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">
		<center><input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
		<input type="submit" value="" class="botonImagen"/></center>
</form>
<?php
echo("<form target='cuerpo' action='resultadoAPrestamo.php' method='post' name='formCarnet'>");
echo("<hr color='#C3A' width=80%/>");
echo("<br>");
echo("<center><a class='texto'><b>Numero de Carnet:</b></a>");
echo("<input type='text' placeholder='Sin guiones' name='txCarnet' id='txCarnet' class='numeric' maxlength='10' onkeypress='return val(event)' title='Ingresarlo SIN GUIONES'><br>");
echo("<input type='submit' name='sbCarnet' value='Consultar' class='sb'></center>");
echo("<br>");
echo("<hr color='#C3A' width=80%/>");
echo("</form>");
?>
<style type="text/css">
.botonImagen
{
	background-image:url(imagenes/regresar.png);
	background-repeat:no-repeat;
	height:75px;
	width:150px;
	background-position:center;
}
.texto
{
	font-family:verdana;
	
}
#txCarnet
{
	font-family:verdana;
	width:100px;
	border-radius: 10px;
	text-align:center;
}
.sb
{
    border: 1px solid #333;
	border-radius: 10px;
	webkit-box-shadow: 0 1px 1px #fff;
	-moz-box-shadow:    0 1px 1px #fff;
	-box-shadow:         0 1px 1px #fff;
	font: bold 11px Sans-Serif;
	padding: 6px 10px;
	white-space: nowrap;
	vertical-align: middle;
	color: #C3A;
	background: transparent;
}
</style>
<input type="text" 

