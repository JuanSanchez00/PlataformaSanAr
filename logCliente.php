<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['nombreCliente'];
	$clave = $_POST['passCliente'];

	$q = "SELECT COUNT(*) as contar FROM Cliente WHERE DNI = '".$usuario."' and password = '".$clave."'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if($array['contar']>0){
		echo "<script> alert('usuario valido, falta la siguiente pantalla');  window.location='LoginCliente.php'; </script>";
		//header("location: PantallaAdministrador.html");
	}else{
		echo "<script> alert('usuario invalido');  window.location='LoginCliente.php'; </script>";
	}
?> 	