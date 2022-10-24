<?php 
	require 'conexion.php';
	session_start();

	$Cliente = $_POST['Cliente'];
	$PassActual = $_POST['ContraseñaActual'];
	$PassNueva = $_POST['ContraseñaNueva'];

	$consulta = "SELECT COUNT(*) as contar FROM cliente WHERE dni = ".$Cliente." AND password = '".$PassActual."';";

	$resultado = mysqli_query($conexion,$consulta);
	$array = mysqli_fetch_array($resultado);

	if($array['contar'] > 0){
		$consulta = "UPDATE cliente SET password = '".$PassNueva."' WHERE DNI = ".$Cliente.";";
		$resultado = mysqli_query($conexion,$consulta);
		echo "<script> alert('Contraseña modificada correctamente.');  window.location='PantallaCliente.php?cliente=$Cliente'; </script>";
	}else{
		echo "<script> alert('La Contraseña actual es erronea. Porfavor, intente de nuevo.');  window.location='ClienteModificaSusDatosSeguridad.php?cliente=$Cliente'; </script>";
	}
?>