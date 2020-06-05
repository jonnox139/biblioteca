<?php
	session_start();
?>
<script language="javascript">
	var num=2; 
	function contador()
	{ 
		num--; 
		if(num==0) 
		{
			location='index.php'; 
		}
		document.getElementById('seg').innerHTML=num; 
	}  
</script>
<style type="text/css">
.turn
{
	padding: 0 2px;
	margin-left: 0;
	width: 16em;
	font:bold 18px "Trebuchet MS"; 
	color:black;
}
}
</style>
<?php
	include("includes/usarBD.php");
	if(trim($HTTP_POST_VARS["txUsuario"]) != "" && trim($HTTP_POST_VARS["txUsuario"]) != "")
	{
		//Captura de Datos
		$bibliotecario=$_POST["ckBibliotecario"];
		if($bibliotecario)
		{
			
			$usuario = strtolower(htmlentities($HTTP_POST_VARS["txUsuario"], ENT_QUOTES));
			$password = $HTTP_POST_VARS["txPass"];
			$consulta= "SELECT user, password FROM ".$bibliotecario." WHERE user= '".$usuario."';";
			$consultar = mysql_query($consulta, $conexion);
			if($biblio = mysql_fetch_array($consultar))
			{
				if($biblio["password"]==$password)
				{
					//$_SESSION["txUsuario"]=$biblio["user"];
					
					$_SESSION["txUsuario"]=$_POST["txUsuario"];
					$_SESSION["txPass"]=$_POST["txPass"];
					?>
					<html>
					<head>
					<script language="javascript" type="text/javascript">
					function mandar(){
					  document.f0.submit();
					}
				  </script>
				  </head>
					<body onLoad="javascript:mandar();">
						<form name="f0" id="f0" method="post" action="bibliotecarios.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">
							<input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
						</form>
					</body>
					</html>
					<?php
					
				}
				else
				{
					?>
					<body onload="setInterval('contador()',1000)" background="imagenes/green.jpg">
						<center>
						<script language="javascript">
						alert("Error en la Contraseña");
						</script>
						<br><a class="turn">Retornando en <span id="seg"><b>2</span> segundos.</b></a></center> 
						<hr />
					</body>
					<?php
				}
			}
			else
			{
					?>
					<body onload="setInterval('contador()',1000)" background="imagenes/green.jpg">
						<center>
						<script language="javascript">
						alert("El Usuario NO Existe");
						</script>
						<br><a class="turn">Retornando en <span id="seg"><b>2</span> segundos.</b></a></center> 
						<hr />
					</body>
					<?php
			}
			
		}
		else
		{
			
			$usuario = strtolower(htmlentities($HTTP_POST_VARS["txUsuario"], ENT_QUOTES));
			$password = $HTTP_POST_VARS["txPass"];
			$consulta= "SELECT carnet, password from alumnos WHERE carnet= '".$usuario."';";
			$result = mysql_query($consulta, $conexion);
			if($row=mysql_fetch_array($result))
			{
				if($row["password"]==$password)
				{
					$_SESSION["txUsuario"]=$_POST["txUsuario"];
					$_SESSION["txPass"]=$_POST["txPass"];
					$buscarPrestamo="Select carnet FROM prestamo WHERE carnet = '".$usuario."';";
					$buscarPrestamoScript = mysql_query($buscarPrestamo, $conexion);
					
					if($wor=mysql_fetch_array($buscarPrestamoScript))
					{
						?>
						<script language="javascript">
							alert("Hay Prestamos Actualmente \nConsulte con el Bibliotecario");
							setTimeout("location.href='index.php'", 1000);
						</script>
						<?php
					}
					else
					{
						$buscarPrestamoMoras="Select carnet FROM mora WHERE carnet = '".$usuario."' AND estadoMora='Activa';";
						$buscarPrestamoMoraScript2 = mysql_query($buscarPrestamoMoras, $conexion);
						if($buscarMora=mysql_fetch_array($buscarPrestamoMoraScript2))
						{
							?>
						<script language="javascript">
							alert("Usted Tiene Moras Pendientes \n \nConsulte con el Bibliotecario");
							setTimeout("location.href='index.php'", 1000);
						</script>
						<?php
						}
						else
						{
						?>
						<html>
						<head>
						<script language="javascript" type="text/javascript">
						function mandar(){
						  document.f0.submit();
						}
					  </script>
					  </head>
						<body onLoad="javascript:mandar();">
							<form name="f0" id="f0" method="post" action="alumnosBiblio.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">
								<input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
							</form>
						</body>
						</html>
						<?php
						}
						
					}
				}
				else
				{
					?>
					<body onload="setInterval('contador()',1000)" background="imagenes/green.jpg">
						<center>
						<script language="javascript">
						alert("Error en la Contraseña");
						</script>
						<br><a class="turn">Retornando en <span id="seg"><b>2</span> segundos.</b></a></center> 
						<hr />
					</body>
					<?php
				}
			}
			else
			{
					?>
					<body onload="setInterval('contador()',1000)" background="imagenes/green.jpg">
						<center>
						<script language="javascript">
						alert("El Usuario NO Existe");
						</script>
						<br><a class="turn">Retornando en <span id="seg"><b>2</span> segundos.</b></a></center> 
						<hr />
					</body>
					<?php
			}
		}
		}
		else
		{
					?>
					<body onload="setInterval('contador()',1000)" background="imagenes/green.jpg">
						<center>
						<script language="javascript">
						alert("Ingrese datos, en Usuaio y la Contraseña");
						</script>
						<br><a class="turn">Retornando en <span id="seg"><b>2</span> segundos.</b></a></center> 
						<hr />
					</body>
					<?php
		}
		mysql_close();
	?>