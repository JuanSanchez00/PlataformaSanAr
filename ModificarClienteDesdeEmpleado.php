<?php 
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Fecha = $_POST['FechaDeNacimiento'];
	$Dni = $_POST['DNI'];
	$Contraseña = $_POST['Contraseña'];
	$Email = $_POST['Email'];
	$Provincia = $_REQUEST['Provincia'];
	$Localidad = $_REQUEST['Localidad'];
	$Calle = $_POST['Calle'];
	$Depto = $_POST['DeptoCasa'];
	$Cp = $_POST['CP'];
	$Tel = $_POST['Telefono'];
	$Plan = $_REQUEST['Plan'];

	$consulta = "UPDATE cliente SET nombre = '".$Nombre."', apellido = '".$Apellido."', fecha_nac = '".$Fecha."', DNI = ".$Dni.", password = '".$Contraseña."', email = '".$Email."', provincia = '".$Provincia."', localidad = '".$Localidad."', calle = '".$Calle."', depto = '".$Depto."', CP = ".$Cp.", tel = ".$Tel.", plan ='".$Plan."' WHERE DNI = ".$Dni.";";

	$resultado = mysqli_query($conexion,$consulta);

	if($resultado){
		echo "<script> alert('usuario modificado correctamente');  window.location='PantallaEmpleado.php?empleado=$empleado'; </script>";
	}
?>
