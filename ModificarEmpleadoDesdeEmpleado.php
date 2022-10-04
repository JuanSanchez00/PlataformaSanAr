<?php 
	require 'conexion.php';
	session_start();

	$Empleado = $_POST['Empleado'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Fecha = $_POST['FechaDeNacimiento'];
	$Dni = $_POST['DNI'];
	$Email = $_POST['Email'];
	$Provincia = $_POST['Provincia'];
	$Localidad = $_POST['Localidad'];
	$Calle = $_POST['Calle'];
	$Depto = $_POST['DeptoCasa'];
	$Cp = $_POST['CP'];
	$Tel = $_POST['Telefono'];
	$Rol = $_POST['Plan'];


	$consulta = "UPDATE empleado SET nombre = '".$Nombre."', apellido = '".$Apellido."', fecha_nac = '".$Fecha."', DNI = ".$Dni.", email = '".$Email."', provincia = '".$Provincia."', localidad = '".$Localidad."', calle = '".$Calle."', depto = '".$Depto."', CP = ".$Cp.", tel = ".$Tel.", rol ='".$Rol."' WHERE DNI = ".$Dni.";";

	$resultado = mysqli_query($conexion,$consulta);

	if($resultado){
		echo "<script> alert('Datos básicos modificados correctamente.');  window.location='PantallaEmpleado.php?empleado=$Empleado'; </script>";
	}
?>
