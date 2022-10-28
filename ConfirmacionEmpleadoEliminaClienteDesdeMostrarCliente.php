<?php
	require 'conexion.php';
	session_start();
	
	$empleado = $_GET['empleado'];
	$cliente  = $_GET['cliente'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> ¿Está seguro que desea eliminar este cliente y toda su informacion? </h1>
	<button onclick = "location.href = 'listarClientes.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
	<button onclick = "location.href = 'EmpleadoEliminaClienteDesdeMostrarCliente.php<?php echo"?empleado=$empleado&cliente=$cliente"?>'"> Aceptar </button> 
</body>
</html>