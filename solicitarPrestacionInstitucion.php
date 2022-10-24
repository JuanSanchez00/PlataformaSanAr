<?php
	require 'conexion.php';
	session_start();

	$nombreInstitucion = $_POST['NombreInstitucion'];
    $direccionInstitucion = $_POST['DireccionInstitucion'];
	$fecha = $_POST['Fecha'];
	$ordenMedica = $_POST['OrdenMedica'];
	$historiaClinica = $_POST['HistoriaClinica'];
	$observaciones = $_POST['Observaciones'];
	$cliente = $_GET['cliente'];

	$consultaCliente=

	$consulta = "INSERT INTO Solicitud_prestacion_institucion(DNI_cliente,estado,nombre_institucion, direccion_institucion,fecha, orden_medica, historia_clinica, observaciones) VALUES ('".$cliente."','nuevo','".$nombreInstitucion."', '".$direccionInstitucion."', '".$fecha."', '".$ordenMedica."', '".$historiaClinica."', '".$observaciones."')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		echo "<script> alert('Solicitud de prestación (instituto) correcta.');  window.location='PantallaCliente.php?cliente=$cliente'; </script>";
	}
?>