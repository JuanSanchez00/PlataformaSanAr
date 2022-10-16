<?php 
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];
	$Cliente = $_POST['Cliente'];
	$PassNueva = $_POST['ContraseñaNueva'];

	$consulta = "UPDATE cliente SET password = '".$PassNueva."' WHERE DNI = ".$Cliente.";";
		$resultado = mysqli_query($conexion,$consulta);
		echo "<script> alert('Contraseña modificada correctamente.');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";

?>