<?php
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];

	$nombre = $_POST['NombrePlan'];
	$consultasMedicas = $_POST['ConsultasMedicas'];
	$consultasMedicasDomiciliarias = $_POST['ConsultasMedicasDomiciliarias'];
	$consultasMedicasOnline = $_POST['ConsultasMedicasOnline'];
	$internacion = $_POST['Internacion'];
	$odontologia = $_POST['Odontologia'];
	$ortodoncia = $_POST['Ortodoncia'];
	$protesisOdontologica = $_POST['ProtesisOdontologica'];
	$implanteOdontologica = $_POST['ImplanteOdontologica'];
	$kinesiologia = $_POST['Kinesiologia'];
	$psicologia = $_POST['Psicologia'];
	$medicamentosEnFarmacia = $_POST['MedicamentosEnFarmacia'];
	$medicamentosEnInternacion = $_POST['MedicamentosEnInternacion'];
	$optica = $_POST['Optica'];
	$cirugiaEstetica = $_POST['CirugiaEstetica'];
	$analisisClinico = $_POST['AnalisisClinico'];
	$analisisDeDiagnostico = $_POST['AnalisisDeDiagnostico'];

	$consulta = "SELECT EXISTS (SELECT * FROM plan WHERE nombre='$nombre')";
	$resultado = mysqli_query($conexion,$consulta);
	$array = mysqli_fetch_array($resultado);

	if($array[0]=="1"){
		echo "<script> alert('Plan ya registrado en el sistema. Por favor ingrese otro.');  window.location='CrearNuevoPlan.php?admin=$admin'; </script>";
	}
	else {
		$consulta = "INSERT INTO Plan VALUES ('".$nombre."', '".$consultasMedicas."', '".$consultasMedicasDomiciliarias."', '".$consultasMedicasOnline."', '".$internacion."', '".$odontologia."', '".$ortodoncia."', '".$protesisOdontologica."', '".$implanteOdontologica."', '".$kinesiologia."', '".$psicologia."', '".$medicamentosEnFarmacia."', '".$medicamentosEnInternacion."', '".$optica."', '".$cirugiaEstetica."', '".$analisisClinico."', '".$analisisDeDiagnostico."')";

		$resultado = mysqli_query($conexion,$consulta);

		if ($resultado) {
			echo "<script> alert('Nuevo Plan creado correctamente');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
		}
	}
?>