<?php
	require 'conexion.php';
	session_start();
	$admin = $_GET['admin'];
	$empleado = $_GET['empleado'];

	$consulta = "DELETE FROM empleado WHERE dni = ".$empleado.";";	
	$resultado = mysqli_query($conexion,$consulta);

	$consulta = "DELETE FROM administrador WHERE dni = ".$empleado.";";	
	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		echo "<script> alert('El empleado se elimino correctamente.');  window.location='listarEmpleados.php?admin=$admin'; </script>";
	}
	else {
		echo "<script> alert('Ocurrió un error al eliminar el empleado.');  window.location='listarEmpleados.php?admin=$admin'; </script>";
	}

?>