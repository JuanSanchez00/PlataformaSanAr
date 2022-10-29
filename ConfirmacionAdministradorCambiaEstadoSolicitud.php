<?php
	require 'conexion.php';
	session_start();
	
	$admin = $_GET['admin'];
	$id = $_GET['id'];
	$estado = $_GET['estado'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> ¿Está seguro que modificar el estado de la solicitud? </h1>
	<button onclick = "location.href = 'AdministradorListaSolicitudes.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
	<button onclick = "location.href = 'EmpleadoCambiaEstadoSolicitud.php<?php echo "?admin=$admin&id=$id&estado=$estado" ?>'"> Aceptar </button> 
</body>
</html>