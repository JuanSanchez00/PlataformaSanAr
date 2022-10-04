<?php
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];

	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$fecha = $_POST['Fecha'];
	$dni = $_POST['DNI'];
	$password = $_POST['Contraseña'];
	$email = $_POST['E-Mail'];
	$provincia = $_POST['Provincia'];
	$localidad = $_POST['Localidad'];
	$calle = $_POST['Calle'];
	$numero = $_POST['Numero'];
	$depto = $_POST['DptoCasa'];
	$cp = $_POST['CP'];
	$telefono = $_POST['Telefono'];
	$codigo = $_POST['Codigo'];
	$plan = $_POST['Plan'];


	$consulta = "SELECT EXISTS (SELECT * FROM Cliente WHERE dni='$dni')";
	$resultado = mysqli_query($conexion,$consulta);
	$array = mysqli_fetch_array($resultado);

	if($array[0]=="1"){
		echo "<script> alert('Cliente con ese dni ya registrado en el sistema. Por favor ingrese otro.');  window.location='CrearNuevoCliente.php?admin=$admin'; </script>";
	}else {
		$consulta = "INSERT INTO Cliente VALUES ('".$nombre."', '".$apellido."', ".$fecha.", ".$dni.", '".$password."', '".$email."', '".$provincia."', '".$localidad."', '".$calle." ".$numero."', '".$depto."', ".$cp.", ".$telefono.", '".$plan."')";

		$resultado = mysqli_query($conexion,$consulta);
		//include 'PantallaCliente.html'

		if ($resultado) {
			echo "<script> alert('Cliente creado correctamente');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
		}
	}
?>