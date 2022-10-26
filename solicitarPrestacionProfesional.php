<?php
	require 'conexion.php';
	session_start();

	$nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
	$fecha = $_POST['Fecha'];
	$ordenMedica = $_POST['OrdenMedica'];
	$historiaClinica = $_POST['HistoriaClinica'];
	$observaciones = $_POST['Observaciones'];
	$cliente = $_GET['cliente'];

	$consultaSolicitud= "INSERT INTO Solicitudes(DNI_cliente,estado,tipo) VALUES ('".$cliente."','Abierta','Prestacion Profesional')";

	mysqli_query($conexion,$consultaSolicitud);

	$consulta = "INSERT INTO Solicitud_prestacion_profesional(id,estado,nombre,apellido, fecha, orden_medica, historia_clinica, observaciones) VALUES (@@IDENTITY,'Abierta','".$nombre."','".$apellido."', '".$fecha."', '".$ordenMedica."', '".$historiaClinica."', '".$observaciones."')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		echo "<script> alert('Solicitud de reintegro por prestación (instituto) correcta.');  window.location='PantallaCliente.php?cliente=$cliente'; </script>";
	}
?>