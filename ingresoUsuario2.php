<?php
include("includes/usarBD.php");
$dd=$_POST["IngresarComo"];
$usuario=$_POST["txUsuario"];
$pass1=$_POST["txPass"];
$pass2=$_POST["txPass2"];
$nombre1=$_POST["txNombre"];
$telefono=$_POST["txTelefono"];
$email=$_POST["txEmail"];
$direccion=$_POST["txDireccion"];
$nombre=ucwords(strtolower($nombre1));
if($dd == "alumnos")
{
	$campo1="carnet";
	$campo2="password";
	$campo3="password2";
	$campo4="nombreAlumno";
	$campo5="telefonoAlumno";
	$campo6="emailAlumno";
	$campo7="direccionAlumno";
	$consulta="INSERT INTO ".$dd." (".$campo1.", ".$campo2.", ".$campo3.", ".$campo4.", ".$campo5.", ".$campo6.", ".$campo7.") VALUES('".$usuario."', '".$pass1."', '".$pass2."', '".$nombre."', '".$telefono."', '".$email."', '".$direccion."');";
	if($usuario==NULL)
	{
	?>
		<script language="javascript">
			alert("El Campo USUARIO, esta Vacio");
			setTimeout("location.href='registroUsuarioAdministrador.php'", 200);
		</script>
		<?php
	}
	else
	{
		if($pass1 != $pass2)
		{
		?>
			<script language="javascript">
				alert("Las Contrase�as no Coindiciden");
				setTimeout("location.href='registroUsuarioAdministrador.php'", 200);
			</script>
			<?php
		}
		else
		{
		
			if($pass1==NULL)
			{
			?>
				<script language="javascript">
					alert("El Campo Contrase�a NO debe ir Vacia");
					setTimeout("location.href='registroUsuarioAdministrador.php'", 200);
				</script>
				<?php
			}
			else
			{
				if($nombre==NULL)
				{
				?>
					<script language="javascript">
						alert("El Campo NOMBRE, esta Vacio");
						setTimeout("location.href='registroUsuarioAdministrador.php'", 200);
					</script>
					<?php
				}
				else
				{
					if (is_numeric($telefono)==false) 
					{
					?>
						<script language="javascript">
							alert("El Campo TELEFONO No es Numerico");
							setTimeout("location.href='registroUsuarioAdministrador.php'", 200);	
						</script>
					<?php
					}
					else
					{
						if (is_numeric($usuario)==false) 
						{
						?>
							<script language="javascript">
								alert("El Campo USUARIO, esta Incorrecto \n Debe ser en formato '25-2378-2007' SIN Guiones");
								setTimeout("location.href='registroUsuarioAdministrador.php'", 200);
							</script>
						<?php
						}
						else
						{
							$registros=mysql_query($consulta, $conexion);
							?>
							<script language="javascript">
								alert("Registro Realizado de Manera Exitosa");
								setTimeout("location.href='administrador.php'", 200);
								</script>
							<?php
						}
					}
				}
			}	
		}
	}
}
else
{
	$campo1="user";
	$campo2="password";
	$campo3="password2";
	$campo4="nombreEmpleado";
	$campo5="telefonoEmpleado";
	$campo6="emailEmpleado";
	$campo7="direccionEmpleado";
	$consulta="INSERT INTO ".$dd." (".$campo1.", ".$campo2.", ".$campo3.", ".$campo4.", ".$campo5.", ".$campo6.", ".$campo7.") VALUES('".$usuario."', '".$pass1."', '".$pass2."', '".$nombre."', '".$telefono."', '".$email."', '".$direccion."');";
	if($usuario==NULL)
	{
	?>
		<script language="javascript">
			alert("El Campo USUARIO, esta Vacio");
			setTimeout("location.href='registro.php'", 200);
		</script>
		<?php
	}
	else
	{
		if($pass1 != $pass2)
		{
		?>
			<script language="javascript">
				alert("Las Contrase�as no Coindiciden");
				setTimeout("location.href='registro.php'", 200);
			</script>
			<?php
		}
		else
		{
			if($pass1==NULL)
			{
			?>
				<script language="javascript">
					alert("El Campo Contrase�a NO debe ir Vacia");
					setTimeout("location.href='registro.php'", 200);
				</script>
				<?php
			}
			else
			{
				if($nombre==NULL)
				{
				?>
					<script language="javascript">
						alert("El Campo NOMBRE, esta Vacio");
						setTimeout("location.href='registro.php'", 200);
					</script>
					<?php
				}
				else
				{
					if (is_numeric($telefono)==false) 
					{
					?>
						<script language="javascript">
							alert("El Campo TELEFONO No es Numerico");
							setTimeout("location.href='registro.php'", 200);	
						</script>
					<?php
					}
					else
					{
							$registros=mysql_query($consulta, $conexion);
							?>
							<script language="javascript">
								alert("Registro Realizado de Manera Exitosa");
								setTimeout("location.href='administrador.php'", 200);
								</script>
							<?php
					}
				}	
			}
		}
	}
}
?>