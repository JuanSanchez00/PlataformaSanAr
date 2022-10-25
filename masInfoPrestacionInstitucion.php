<?php
	require 'conexion.php';
	session_start();

	$cliente = $_GET['cliente'];

	$id = $_GET['id'];
	$tipo = $_GET['tipo'];

	$consulta = "SELECT nombre_institucion, direccion_institucion,fecha, orden_medica, historia_clinica, observaciones FROM solicitud_prestacion_institucion WHERE id = '".$id."';";
	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado){
		while ($row = $resultado->fetch_array()) {
			$nombreInstitucion = $row['nombre_institucion'];
			$direccionInstitucion = $row['direccion_institucion'];
			$fecha = $row['fecha'];
			$ordenMedica = $row['orden_medica'];
			$historiaClinica = $row['historia_clinica'];
			$observaciones = $row['observaciones'];
		}
	}	
?>


	<html>
	<head>
		<title>ClienteSolicitaPrestacionProfesional</title>
	</head>
	<body>
        <h1>Info Solicitud</h1>

		<label for="Numero">N°: </label><br>
		<input class="soloLectura" type="text" id="Numero" name="Numero" value = <?php echo $id;?> readonly><br>

		<label for="NombreInstitucion">Nombre de la institucion: </label><br>
		<input class="soloLectura" type="text" id="NombreInstitucion" name="NombreInstitucion" value = <?php echo $nombreInstitucion;?> readonly><br>

		<label for="DireccionInstitucion">Direccion de la institucion: </label><br>
		<input class="soloLectura" type="text" id="DireccionInstitucion" name="DireccionInstitucion" value = <?php echo $direccionInstitucion;?> readonly><br>

		<label for="Fecha">Fecha: </label><br>
		<input class="soloLectura" type="date" id="Fecha" name="Fecha" value = <?php echo $fecha;?> readonly><br>

		<label for="OrdenMedica">Orden medica: </label><br>
		<input class="soloLectura" type="file" id="Numero" name="Numero" value = <?php echo $ordenMedica;?> readonly><br>

		<label for="HistoriaClinica">Historia clinica: </label><br>
		<input class="soloLectura" type="file" id="Numero" name="Numero" value = <?php echo $historiaClinica;?> readonly><br>

		<label for="Observaciones">Observaciones: </label><br>
		<input readonly class="soloLectura" type="text" id="Observaciones" name="Observaciones" value = <?php echo $observaciones;?>><br>




		<button onclick="location.href='PantallaCliente.php<?php echo"?cliente=$cliente"?>'"> Volver </button>		

    </body>
</html>