<?php 
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Fecha = $_POST['FechaDeNacimiento'];
	$Dni = $_POST['DNI'];
	$Email = $_POST['Email'];
	$Provincia = $_REQUEST['Provincia'];
	$Localidad = $_REQUEST['Localidad'];
	$Calle = $_POST['Calle'];
	$Depto = $_POST['DeptoCasa'];
	$Cp = $_POST['CP'];
	$Tel = $_POST['Telefono'];
	$Rol = $_REQUEST['Rol'];

	//echo $Nombre, $Apellido, $Fecha, $Dni, $Contraseña, $Email, $Provincia, $Localidad, $Calle, $Depto, $Cp, $Tel, $Plan;

	$consulta = "UPDATE empleado SET nombre = '".$Nombre."', apellido = '".$Apellido."', fecha_nac = '".$Fecha."', DNI = ".$Dni.", email = '".$Email."', provincia = '".$Provincia."', localidad = '".$Localidad."', calle = '".$Calle."', depto = '".$Depto."', CP = ".$Cp.", tel = ".$Tel.", rol ='".$Rol."' WHERE DNI = ".$Dni.";";

	$resultado = mysqli_query($conexion,$consulta);

	if($resultado){
		echo "<script> alert('empleado modificado correctamente');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
	}
?>