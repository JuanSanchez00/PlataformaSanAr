<?php 
	require 'conexion.php';
	session_start();

	$Empleado = $_POST['Empleado'];
	$PassActual = $_POST['ContraseñaActual'];
	$PassNueva = $_POST['ContraseñaNueva'];

	$consulta = "SELECT COUNT(*) as contar FROM empleado WHERE dni = ".$Empleado." AND password = '".$PassActual."';";

	$resultado = mysqli_query($conexion,$consulta);
	$array = mysqli_fetch_array($resultado);

	if($array['contar'] > 0){
		$consulta = "UPDATE empleado SET password = '".$PassNueva."' WHERE DNI = ".$Empleado.";";
		$resultado = mysqli_query($conexion,$consulta);
		echo "<script> alert('Contraseña modificada correctamente.');  window.location='PantallaEmpleado.php?empleado=$Empleado'; </script>";
	}else{
		echo "<script> alert('La Contraseña actual es erronea. Porfavor, intente de nuevo.');  window.location='EmpleadoModificaSusDatosSeguridad.php?empleado=$Empleado'; </script>";
	}
?>
