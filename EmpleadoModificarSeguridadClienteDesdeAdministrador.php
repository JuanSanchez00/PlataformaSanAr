<?php 
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];
	$Cliente = $_POST['Cliente'];
	$PassNueva = $_POST['ContraseñaNueva'];

	$consulta = "UPDATE cliente SET password = '".$PassNueva."' WHERE DNI = ".$Cliente.";";
		$resultado = mysqli_query($conexion,$consulta);
		echo "<script> alert('Contraseña modificada correctamente.');  window.location='EmpleadoListaClientes.php?empleado=$empleado'; </script>";

?>