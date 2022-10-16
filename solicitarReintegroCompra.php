<?php
	require 'conexion.php';
	session_start();

	$cuitcuil = $_POST['CUITCUIL'];
	$fecha = $_POST['Fecha'];
	$ordenMedica = $_POST['OrdenMedica'];
	$factura = $_POST['Factura'];
	$historiaClinica = $_POST['HistoriaClinica'];
	$observaciones = $_POST['Observaciones'];
	$cliente = $GET['cliente'];

	$consulta = "INSERT INTO Solicitud_reintegro_compra(cuitcuil, fecha, orden_medica, factura, historia_clinica, observaciones) VALUES (".$cuitcuil.", '".$fecha."', '".$ordenMedica."', '".$factura."', '".$historiaClinica."', '".$observaciones."')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		echo "<script> alert('Solicitud de reintegro por compra correcta.');  window.location='PantallaCliente.php?cliente=$dniTutor'; </script>";
	}
?>