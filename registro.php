<?php
include("includes/usarBD.php");
?>
<script language="javascript">
function val(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[A-Z a-z]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function val2(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[0-9]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
</script>
<html>
	<head>
		<title>Registrese</title>
	</head>
	</script>
	<style type="text/css">
.palabra
{
	font-weight:bold;
	font-family:times;
	background-color: transparent;
}
.ddlist
{
	border:1px solid black;
	font-weight:oblique;
	background-image:url('2011sp.png');
	background-repeat:repeat-x;
	background-position:top left;
	font-family:arial;
	font-size:13px;
	padding-top:2px;
	padding-bottom:2px;
	padding-left:6px;
}
.cajas
{
	border-width:1px;
	border-color:#0000FF;
	height:23px;
	text-align: center;
	text-family:verdana;
}
.boton
{
	font-size:15px;
	font-family:Verdana,Helvetica;
	font-weight:bold;
	color:white;
	background:#638cb5;
	border:1px;
	width:120px;
	height:30px;
}

.botonImagen
	{
		background-image:url(imagenes/regresar.png);
		background-repeat:no-repeat;
		height:75px;
		width:150px;
		background-position:center;
	}
</style>
	<body background="imagenes/green.jpg">
	<form action="ingresoUsuario.php" method="post" name="usuarioInForm">
	<table align="center">
	<tr>
		<td colspan="2" align="center">
		<a class="palabra">Registrarse como:</a><br>
		<select name="IngresarComo" class="ddlist">
			<option value="alumnos">Alumno</option>
		</select>
		</td>
	</tr>
	<tr>
		<td><a class="palabra">Usuario:</a></td>
		<td><input type="text" name="txUsuario" placeholder="UserName" maxlength="10" class="cajas"></td>
	</tr>
	<tr>
		<td><a class="palabra">Contraseņa:</a></td>
		<td><input type="password" name="txPass" placeholder="++++++" maxlength="15" class="cajas"></td>
	</tr>
	<tr>
		<td><a class="palabra">Confirmar Contraseņa:</a></td>
		<td><input type="password" name="txPass2" placeholder="++++++" maxlength="15" class="cajas"></td>
	</tr>
	<tr>
		<td><a class="palabra">Nombre:</a></td>
		<td><input type="text" name="txNombre" placeholder="Nombre Completo" class="cajas" onkeypress="return val(event)"></td>
	</tr>
	<tr>
		<td><a class="palabra">Telefono:</a></td>
		<td><input type="text" name="txTelefono" placeholder="Ej: 222728888" onkeypress="return val2(event)" maxlength="8" class="cajas"></td>
	</tr>
	<tr>
		<td><a class="palabra">Correo Electr&oacute;nico:</a></td>
		<td><input type="text" name="txEmail" placeholder="Ej: username@dominio.com" class="cajas"></td>
	</tr>
	<tr>
		<td><a class="palabra">Direcci&oacute;n:</a></td>
		<td><input type="text" name="txDireccion" placeholder="Direccion" class="cajas"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Registrarme" class="boton"></td>
	</tr>
	</table>
	</form>
	<!-- MANTIENE LA SESION! -->
	<form action="index.php">
		<center><input type="submit" value="" class="botonImagen"/>	</center>
	</form>
<!--FIN DEL BOTON-->
	</body>
</html>