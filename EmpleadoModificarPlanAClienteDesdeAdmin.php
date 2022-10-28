<?php 
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];
	$Plan = $_POST['PlanesNuevos'];
	$Dni = $_POST['DNI'];

	$consulta = "UPDATE cliente SET plan ='".$Plan."' WHERE DNI = ".$Dni.";";

	$resultado = mysqli_query($conexion,$consulta);

	if($resultado){
		echo "<script> alert('usuario modificado correctamente');  window.location='EmpleadoListaClientes.php?empleado=$empleado'; </script>";
	}
?>