<?php
	require 'conexion.php';
	session_start();

	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$fecha = $_POST['Fecha'];
	$dni = $_POST['DNI'];
	$password = $_POST['Contraseña'];
	$email = $_POST['E-Mail'];
	$provincia = $_POST['Provincia'];
	$localidad = $_POST['Localidad'];
	$calle = $_POST['Calle'];
	$numero = $_POST['Numero'];
	$depto = $_POST['DptoCasa'];
	$cp = $_POST['CP'];
	$telefono = $_POST['Telefono'];
	$codigo = $_POST['Codigo'];
	$plan = $_POST['Plan'];


	$consulta = "INSERT INTO Cliente VALUES ('".$nombre."', '".$apellido."', ".$fecha.", ".$dni.", '".$password."', '".$email."', '".$provincia."', '".$localidad."', '".$calle." ".$numero."', '".$depto."', ".$cp.", ".$telefono.", '".$plan."')";

	$resultado = mysqli_query($conexion,$consulta);
	
	if ($resultado) {
		echo "<script> alert('Cliente creado correctamente.');  window.location='PantallaEmpleado.php'; </script>";
	}

	?>