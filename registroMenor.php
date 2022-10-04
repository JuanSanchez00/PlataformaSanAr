<?php
	require 'conexion.php';
	session_start();

	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$fecha = $_POST['Fecha'];
	$dni = $_POST['DNI'];
	$relacion = $_POST['Relacion'];
	$dniTutor = $_POST['Cliente'];

	$consulta = "SELECT EXISTS (SELECT * FROM Cliente_menor WHERE DNI='$dni')";

	$resultado = mysqli_query($conexion,$consulta);
	$array = mysqli_fetch_array($resultado);

	if($array[0]=="1"){
		echo "<script> alert('DNI ya registrado en el sistema. Por favor ingrese otro.');  window.location='AsociarMenor.php?cliente=$dniTutor'; </script>";
	}
	else {
		$consulta = "INSERT INTO Cliente_menor VALUES ('".$nombre."', '".$apellido."', '".$fecha."', '".$dni."', '".$relacion."', '".$dniTutor."')";

		$resultado = mysqli_query($conexion,$consulta);

		if ($resultado) {
			echo "<script> alert('Usuario menor asociado correctamente.');  window.location='PantallaCliente.php?cliente=$dniTutor'; </script>";
		}
	}

	

	?>