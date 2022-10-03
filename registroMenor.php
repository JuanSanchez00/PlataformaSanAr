<?php
	require 'conexion.php';
	session_start();

	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$fecha = $_POST['Fecha'];
	$dni = $_POST['DNI'];
	$relacion = $_POST['Relacion'];
	$dniTutor = "aca va el dni del tutor"



	$consulta = "INSERT INTO Cliente_menor VALUES ('".$nombre."', '".$apellido."', '".$fecha."', '".$dni."', '".$relacion."', '".$dniTutor."')";

	$resultado = mysqli_query($conexion,$consulta);

	?>