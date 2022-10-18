<?php
	require 'conexion.php';
	session_start();

	$consulta = "SELECT * FROM Plan WHERE nombre = '".$_REQUEST['Planes']."';";
	$resultado = mysqli_query($conexion,$consulta);

	$admin = $_GET['admin'];

	if ($resultado){
		while ($row = $resultado->fetch_array()) {
			$Nombre = $row['nombre'];
			$ConsultasMedicas = $row['consultas_medicas'];
			$ConsultasMedicasDomiciliarias = $row['consultas_medicas_domiciliarias'];
			$ConsultasMedicasOnline = $row['consultas_medicas_onlines'];
			$Internacion = $row['internacion'];
			$Odontologia = $row['odontologia'];
			$Ortodoncia = $row['ortodoncia'];
			$ProtesisOdontologica = $row['protesis_odontologica'];
			$ImplanteOdontologico = $row['implente_odontologico'];
			$Kinesiologia = $row['kinesiologia'];
			$Psicologia = $row['psicologia'];
			$MedicamentosEnFarmacia = $row['medicamentos_en_farmacia'];
			$MedicamentosEnInternacion = $row['medicamentos_en_internacion'];
			$Optica = $row['optica'];
			$CirugiaEstetica = $row['cirugia_estetica'];
			$AnalisisClinico = $row['analisis_clinico'];
			$AnalisisDeDiagnostico = $row['analisis_de_diagnostico'];
		}
	}

	$arreglo = array("","B", "A", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
	$consulta = "SELECT nombre FROM plan";
	$resultado = mysqli_query($conexion,$consulta);
	
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			if ($clave = array_search($nombre, $arreglo)) {
				unset($arreglo[$clave]);
			}
		}
	}
	$clave = array_search("", $arreglo);
	unset($arreglo[$clave]);
			
?>
<html>
	<head>
		<title>Modificar Datos Plan</title>
	</head>
	<body>
		<h1>Modificar datos plan</h1>

       	<form action= "modificarPlanDesdeAdmin.php<?php echo "?admin=$admin"?>" method="POST">
			<p>Los campos marcados con * son obligatorios</p>
       		<p>Completar cada uno de los campos con un numero entero entre 0 y 100</p>
       		<label for="Nombre">* Nombre: </label><br>
			<select name ="NombrePlan" id="NombrePlan">
				<?php $i =0; foreach ($arreglo as $item){ ?>
				<option name ="NombrePlan" id="NombrePlan" value= "<?php echo $item ?>" > <?php echo $item; ?> </option>
				<?php $i= $i+1; } ?>
			</select>

			<label for="ConsultasMedicas">* Consultas Medicas: </label><br>
			<input type="number" id="ConsultasMedicas" name="ConsultasMedicas" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $ConsultasMedicas;?> required>%<br>

			<label for="ConsultasMedicasDomiciliarias">* Consultas Medicas Domiciliarias: </label><br>
			<input type="number" id="ConsultasMedicasDomiciliarias" name="ConsultasMedicasDomiciliarias" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $ConsultasMedicasDomiciliarias;?> required>%<br>

			<label for="ConsultasMedicasOnline">* Consultas Medicas Online: </label><br>
			<input type="number" id="ConsultasMedicasOnline" name="ConsultasMedicasOnline" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;"  value = <?php echo $ConsultasMedicasOnline;?> required>%<br>

			<label for="Internacion">* Internación: </label><br>
			<input type="number" id="Internacion" name="Internacion" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Internacion;?> required>%<br>

			<label for="Odontologia">* Odontología: </label><br>
			<input type="number" id="Odontologia" name="Odontologia" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Odontologia;?> required>%<br>

			<label for="Ortodoncia">* Ortodoncia: </label><br>
			<input type="number" id="Ortodoncia" name="Ortodoncia" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Ortodoncia;?> required>%<br>

			<label for="ProtesisOdontologica">* Prótesis odontológica: </label><br>
			<input type="number" id="ProtesisOdontologica" name="ProtesisOdontologica" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $ProtesisOdontologica;?> required>%<br>

			<label for="ImplanteOdontologica">* Implante odontológico: </label><br>
			<input type="number" id="ImplanteOdontologica" name="ImplanteOdontologica" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $ImplanteOdontologico;?> required>%<br>

			<label for="Kinesiologia">* Kinesiología: </label><br>
			<input type="number" id="Kinesiologia" name="Kinesiologia" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Kinesiologia;?> required>%<br>

			<label for="Psicologia">* Psicología: </label><br>
			<input type="number" id="Psicologia" name="Psicologia" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Psicologia;?> required>%<br>

			<label for="MedicamentosEnFarmacia">* Medicamentos en farmacia: </label><br>
			<input type="number" id="MedicamentosEnFarmacia" name="MedicamentosEnFarmacia" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $MedicamentosEnFarmacia;?> required>%<br>

			<label for="MedicamentosEnInternacion">* Medicamentos en internación: </label><br>
			<input type="number" id="MedicamentosEnInternacion" name="MedicamentosEnInternacion" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $MedicamentosEnInternacion;?> required>%<br>

			<label for="Optica">* Óptica: </label><br>
			<input type="number" id="Optica" name="Optica" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Optica;?> required>%<br>

			<label for="CirugiaEstetica">* Cirugía estética: </label><br>
			<input type="number" id="CirugiaEstetica" name="CirugiaEstetica" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $CirugiaEstetica;?> required>%<br>

			<label for="AnalisisClinico">* Análisis clínico: </label><br>
			<input type="number" id="AnalisisClinico" name="AnalisisClinico" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $AnalisisClinico;?> required>%<br>

			<label for="AnalisisDeDiagnostico">* Análisis de diagnóstico: </label><br>
			<input type="number" id="AnalisisDeDiagnostico" name="AnalisisDeDiagnostico" min="0" max="100" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $AnalisisDeDiagnostico;?> required>%<br>

			<script type="text/javascript">
			    function SoloEnteroPositivo(e) {
			        var theEvent = e || window.event;
			        var key = theEvent.keyCode || theEvent.which;
			        key = String.fromCharCode(key);
			        var regex = /[^,.;]+$/;
			        if (!regex.test(key)) {
			            theEvent.returnValue = false;
			            if (theEvent.preventDefault) {
			                theEvent.preventDefault();
			            }
			        }
			    }
			</script>

			<br><button name = "NombreViejo" value = '<?php echo $Nombre ?>'> Confirmar </button>  
		</form>

       	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

    </body>
</html>
