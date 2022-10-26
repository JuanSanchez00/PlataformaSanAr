<?php
	require 'conexion.php';
	session_start();
	$admin = $_GET['admin'];
	$cliente = $_GET['cliente'];

	$consulta = "DELETE FROM Cliente WHERE dni = ".$cliente."";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		echo "<script> alert('El cliente se elimino correctamente.');  window.location='listarClientes.php?admin=$admin'; </script>";
	}
	else {
		echo "<script> alert('Ocurrió un error al eliminar el cliente.');  window.location='listarClientes.php?admin=$admin'; </script>";
	}
?>