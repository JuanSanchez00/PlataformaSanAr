<?php
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];

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
	$rol = $_POST['Rol'];
	$sucursal = $_POST['Sucursal'];


	$consulta = "INSERT INTO Empleado VALUES ('".$nombre."', '".$apellido."', ".$fecha.", ".$dni.", '".$password."', '".$email."', '".$provincia."', '".$localidad."', '".$calle." ".$numero."', '".$depto."', '".$cp."', '".$telefono."', '".$rol."', '".$sucursal."')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		echo "<script> alert('Empleado creado correctamente');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
	}

?>