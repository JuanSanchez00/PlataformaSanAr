<?php
	require 'conexion.php';
	session_start();

	
	$nombre = $_POST['Nombre'];
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


	$consulta = "INSERT INTO Plan VALUES ('".$nombre."', '".$consultasMedicas."', '".$consultasMedicasDomiciliarias."', '".$consultasMedicasOnline."', '".$internacion."', '".$odontologia."', '".$ortodoncia."', '".$protesisOdontologica."', '".$implanteOdontologica."', '".$kinesiologia."', '".$psicologia."', '".$medicamentosEnFarmacia."', '".$medicamentosEnInternacion."', '".$optica."', '".$cirugiaEstetica."', '".$analisisClinico."', '".$analisisDeDiagnostico."')";

	$resultado = mysqli_query($conexion,$consulta);

	?>