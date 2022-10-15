<?php 
	require 'conexion.php';
	session_start();

	$admin = $_GET['admin'];
	$Nombre = $_REQUEST['Nombre'];
	$ConsultasMedicas = $_POST['ConsultasMedicas'];
	$ConsultasMedicasDomiciliarias = $_POST['ConsultasMedicasDomiciliarias'];
	$ConsultasMedicasOnline = $_POST['ConsultasMedicasOnline'];
	$Internacion = $_POST['Internacion'];
	$Odontologia = $_POST['Odontologia'];
	$Ortodoncia = $_POST['Ortodoncia'];
	$ProtesisOdontologica = $_POST['ProtesisOdontologica'];
	$ImplanteOdontologica = $_POST['ImplanteOdontologica'];
	$Kinesiologia = $_POST['Kinesiologia'];
	$Psicologia = $_POST['Psicologia'];
	$MedicamentosEnFarmacia = $_REQUEST['MedicamentosEnFarmacia'];
	$MedicamentosEnInternacion = $_POST['MedicamentosEnInternacion'];
	$Optica = $_POST['Optica'];
	$CirugiaEstetica = $_POST['CirugiaEstetica'];
	$AnalisisClinico = $_POST['AnalisisClinico'];
	$AnalisisDeDiagnostico = $_POST['AnalisisDeDiagnostico'];
	$NombreViejo = $_POST['NombreViejo'];

	$consulta = "UPDATE plan SET nombre = '".$Nombre."', consultas_medicas = ".$ConsultasMedicas.", consultas_medicas_domiciliarias = ".$ConsultasMedicasDomiciliarias.", consultas_medicas_onlines = ".$ConsultasMedicasOnline.", internacion = ".$Internacion.", 	odontologia = ".$Odontologia.", ortodoncia = ".$Ortodoncia.", protesis_odontologica = ".$ProtesisOdontologica.", implente_odontologico = ".$ImplanteOdontologica.", kinesiologia = ".$Kinesiologia.", psicologia = ".$Psicologia.", medicamentos_en_farmacia =".$MedicamentosEnFarmacia.", medicamentos_en_internacion = ".$MedicamentosEnInternacion.", optica = ".$Optica.", cirugia_estetica = ".$CirugiaEstetica.", analisis_clinico = ".$AnalisisClinico.", analisis_de_diagnostico = ".$AnalisisDeDiagnostico." WHERE nombre = '".$NombreViejo."';";

	$resultado = mysqli_query($conexion,$consulta);

	if($resultado){
		echo "<script> alert('Plan modificado correctamente.');  window.location='PantallaAdministrador.php?admin=$admin'; </script>";
	}
?>