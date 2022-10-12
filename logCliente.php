<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['nombreCliente'];
	$clave = $_POST['passCliente'];

	//$q = "SELECT COUNT(*) as contar FROM Cliente WHERE DNI = '".$usuario."' and password = '".$clave."'";
	$q = "SELECT COUNT(*) as contar FROM Cliente WHERE DNI = '".$usuario."'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if ($array['contar']==0) {
		echo "<script> alert('DNI inválido.');  window.location='LoginCliente.php'; </script>";
	}
	else {
		$q = "SELECT COUNT(*) as contar FROM Cliente WHERE DNI = '".$usuario."' and password = '".$clave."'";
		$consulta = mysqli_query($conexion,$q);
		$array = mysqli_fetch_array($consulta);
			if ($array['contar']>0) {
				header("location: PantallaCliente.php?cliente=$usuario");
			}
			else {
				echo "<script> alert('Contraseña inválida.');  window.location='LoginCliente.php'; </script>";
			}

	}
?> 	