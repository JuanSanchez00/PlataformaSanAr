<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['nombreAdmin'];
	$clave = $_POST['passAdmin'];

	$q = "SELECT COUNT(*) as contar FROM Administrador WHERE DNI = '".$usuario."' and password = '".$clave."'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if($array['contar']>0){
		header("location: PantallaAdministrador.html");
	}else{
		echo "<script> alert('usuario invalido');  window.location='LoginAdministrador.php'; </script>";
	}
?> 	
