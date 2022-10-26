<?php
	require 'conexion.php';
	session_start();
	
	$admin = $_GET['admin'];
	$plan  = $_POST['Eliminar'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> Desea eliminar plan '<?php echo $plan; ?>' ?</h1>
	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
	<button onclick = "location.href = 'EliminarPlan.php<?php echo "?admin=$admin&plan=$plan"?>'"> Aceptar </button> 
</body>
</html>