<?php 
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];
	$Empleado = $_POST['Empleado'];
	$PassNueva = $_POST['ContraseñaNueva'];

	$consulta = "UPDATE empleado SET password = '".$PassNueva."' WHERE DNI = ".$Empleado.";";
		$resultado = mysqli_query($conexion,$consulta);
		echo "<script> alert('Contraseña modificada correctamente.');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";

?>