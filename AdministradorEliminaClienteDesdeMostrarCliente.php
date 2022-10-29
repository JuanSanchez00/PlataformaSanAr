<?php
	require 'conexion.php';
	session_start();
	$admin = $_GET['admin'];
	$cliente = $_GET['cliente'];

	//Pedir las solicitudes de los clientes

	$consulta = "SELECT id FROM solicitudes WHERE DNI_cliente = ".$cliente." AND estado <> 'Aprobada' AND estado <> 'Desaprobada';";
	$resultado = mysqli_query($conexion,$consulta);
	$array = array();
	$i = 0;

	// Eliminar Solicitudes
	
	while ($row = $resultado->fetch_array() ) {
		$array[$i] = $row['id'];
		$i++;
	}

	if(sizeof($array)>0){
		echo "<script> alert('No se pueden eliminar clientes con solicitudes pendientes.');  window.location='listarClientes.php?admin=$admin'; </script>";	
	}else{
		
		$consulta = "SELECT id FROM solicitudes WHERE DNI_cliente = ".$cliente.";";
		$resultado = mysqli_query($conexion,$consulta);
		$array2 = array();

		$i = 0;

		while ($row = $resultado->fetch_array() ) {
			$array2[$i] = $row['id'];
			$i++;
		}

		foreach ($array2 as $id) {
			// Elimino de solicitud_prestacion_institucion
			$consulta = "DELETE FROM solicitud_prestacion_institucion WHERE id = ".$id.";";	
			$resultado = mysqli_query($conexion,$consulta);
			// Elimino de solicitud_prestacion_profesional
			$consulta = "DELETE FROM solicitud_prestacion_profesional WHERE id = ".$id.";";	
			$resultado = mysqli_query($conexion,$consulta);
			// Elimino de solicitud_reintegro_compra
			$consulta = "DELETE FROM solicitud_reintegro_compra WHERE id = ".$id.";";	
			$resultado = mysqli_query($conexion,$consulta);
			// Elimino de solicitud_reintegro_prestacion_institucion
			$consulta = "DELETE FROM solicitud_reintegro_prestacion_institucion WHERE id = ".$id.";";	
			$resultado = mysqli_query($conexion,$consulta);
			// Elimino de solicitud_reintegro_prestacion_profesional
			$consulta = "DELETE FROM solicitud_reintegro_prestacion_profesional WHERE id = ".$id.";";	
			$resultado = mysqli_query($conexion,$consulta);
			// Elimino de solicitudes
			$consulta = "DELETE FROM solicitudes WHERE id = ".$id.";";	
			$resultado = mysqli_query($conexion,$consulta);
		}
	}
	
	// Eliminar Menores

	$consulta = "SELECT DNI FROM cliente_menor WHERE DNI_tutor = ".$cliente.";";
	$resultado = mysqli_query($conexion,$consulta);
	$array = array();
	while ($row = $resultado->fetch_array() ) {
		$array[$i] = $row['DNI'];
		$i++;
	}

	foreach ($array as $dni) {
		$consulta = "DELETE FROM cliente_menor WHERE DNI = ".$dni.";";
		$resultado = mysqli_query($conexion,$consulta);
	}

	//Eliminar Cliente

	$consulta = "DELETE FROM Cliente WHERE dni = ".$cliente."";
	$resultado = mysqli_query($conexion,$consulta);
	
	if ($resultado) {
		echo "<script> alert('El cliente se elimino correctamente.');  window.location='listarClientes.php?admin=$admin'; </script>";
	}
	else {
		echo "<script> alert('Ocurrió un error al eliminar el cliente.');  window.location='listarClientes.php?admin=$admin'; </script>";
	}
?>