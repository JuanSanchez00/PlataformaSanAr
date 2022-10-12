<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['nombreEmpleado'];
	$clave = $_POST['passEmpleado'];

	$q = "SELECT COUNT(*) as contar FROM Empleado WHERE DNI = '".$usuario."'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if ($array['contar']==0) {
		echo "<script> alert('DNI inválido.');  window.location='LoginEmpleado.php'; </script>";
	}
	else {
		$q = "SELECT COUNT(*) as contar FROM Empleado WHERE DNI = '".$usuario."' and password = '".$clave."'";
		$consulta = mysqli_query($conexion,$q);
		$array = mysqli_fetch_array($consulta);

		if ($array['contar']>0) {
			header("location: PantallaEmpleado.php?empleado=$usuario");
		}
		else {
			echo "<script> alert('Contraseña inválida.');  window.location='LoginEmpleado.php'; </script>";
		}
	}
?> 	