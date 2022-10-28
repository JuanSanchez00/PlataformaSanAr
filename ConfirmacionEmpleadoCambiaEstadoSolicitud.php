<?php
	require 'conexion.php';
	session_start();
	
	$empleado = $_GET['empleado'];
	$id = $_GET['id'];
	$estado = $_GET['estado'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> ¿Está seguro que modificar el estado de la solicitud? </h1>
	<button onclick = "location.href = 'EmpleadoListaSolicitudes.php<?php echo "?empleado=$empleado" ?>'"> Cancelar </button> 
	<button onclick = "location.href = 'EmpleadoCambiaEstadoSolicitud.php<?php echo "?empleado=$empleado&id=$id&estado=$estado" ?>'"> Aceptar </button> 
</body>
</html>