<?php 
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];
	$id = $_GET['id'];
	$estado = $_GET['estado'];


	$consulta = "UPDATE solicitudes SET estado = '".$estado."' WHERE id = ".$id.";";

	$resultado = mysqli_query($conexion,$consulta);

	if($resultado){
		echo "<script> alert('Estado de solicitud modificado correctamente.');  window.location='EmpleadoListaSolicitudes.php?empleado=$empleado'; </script>";
	}
?>