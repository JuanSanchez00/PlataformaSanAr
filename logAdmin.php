<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['nombreAdmin'];
	$clave = $_POST['passAdmin'];

	$q = "SELECT COUNT(*) as contar FROM Administrador WHERE DNI = '".$usuario."'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if ($array['contar']==0) {
		echo "<script> alert('DNI inválido.');  window.location='LoginAdministrador.php'; </script>";
	}
	else {
		$q = "SELECT COUNT(*) as contar FROM Administrador WHERE DNI = '".$usuario."' and password = '".$clave."'";
		$consulta = mysqli_query($conexion,$q);
		$array = mysqli_fetch_array($consulta);

		if ($array['contar']>0) {
			header("location: PantallaAdministrador.php?admin=$usuario");
		}
		else {
			echo "<script> alert('Contraseña inválida.');  window.location='LoginAdministrador.php'; </script>";
		}
	}
?> 	
