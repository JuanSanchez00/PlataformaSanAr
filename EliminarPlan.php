<<?php 
	require 'conexion.php';
	session_start();
	$admin = $_GET['admin'];
	$plan = $_GET['plan'];

	$consulta = "SELECT COUNT(*) as contar FROM cliente WHERE plan = '".$plan."';";
	$resultado = mysqli_query($conexion,$consulta);
	$array = mysqli_fetch_array($resultado);

	if($array['contar'] == 0){
		$consulta = "DELETE FROM Plan WHERE nombre = '".$plan."'";
		$resultado = mysqli_query($conexion,$consulta);
		echo "<script> alert('El plan se elimino correctamente');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
	}else{
		echo "<script> alert('El plan posee clientes asociados. No se puede eliminar');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
	}

?>