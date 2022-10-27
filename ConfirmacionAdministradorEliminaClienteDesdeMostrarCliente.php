<?php
	require 'conexion.php';
	session_start();
	
	$admin = $_GET['admin'];
	$cliente  = $_GET['cliente'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> ¿Está seguro que desea eliminar este cliente y toda su informacion? </h1>
	<button onclick = "location.href = 'listarClientes.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
	<button onclick = "location.href = 'AdministradorEliminaClienteDesdeMostrarCliente.php<?php echo"?admin=$admin&cliente=$cliente"?>'"> Aceptar </button> 
</body>
</html>