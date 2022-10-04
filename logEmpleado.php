<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['nombreEmpleado'];
	$clave = $_POST['passEmpleado'];

	$q = "SELECT COUNT(*) as contar FROM Empleado WHERE DNI = '".$usuario."' and password = '".$clave."'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);

	if($array['contar']>0){
		header("location: PantallaEmpleado.php?empleado=$usuario");
	}else{
		echo "<script> alert('usuario invalido');  window.location='LoginEmpleado.php'; </script>";
	}
?> 	