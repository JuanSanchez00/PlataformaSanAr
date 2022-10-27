<?php
	require 'conexion.php';
	session_start();
	
	$admin = $_GET['admin'];
	$empleado  = $_GET['empleado'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> ¿Está seguro que desea eliminar este empleado y toda su informacion? </h1>
	<button onclick = "location.href = 'listarEmpleados.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
	<button onclick = "location.href = 'AdministradorEliminaEmpleadoDesdeMostrarEmpleado.php<?php echo"?admin=$admin&empleado=$empleado"?>'"> Aceptar </button> 
</body>
</html>