<?php
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];

	$cliente = $_GET['cliente'];

	$id = $_GET['id'];

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
		<title>InfoPrestacionInstitucion</title>
	</head>
	<body>
        <h1>Info Solicitud</h1>
		<form method="post"  >

			<label for="Numero">N°: </label>
			<input class="soloLectura" type="number" id="Numero" name="Numero" value = <?php echo $id;?> readonly><br>

			<label for="NombreInstitucion">Nombre de la institucion: </label>
			<input class="soloLectura" type="text" id="NombreInstitucion" name="NombreInstitucion" value = <?php echo $nombreInstitucion;?> readonly><br>

			<label for="DireccionInstitucion">Direccion de la institucion: </label>
			<input class="soloLectura" type="text" id="DireccionInstitucion" name="DireccionInstitucion" value = <?php echo $direccionInstitucion;?> readonly><br>

			<label for="Fecha">Fecha: </label>
			<input class="soloLectura" type="date" id="Fecha" name="Fecha" value = <?php echo $fecha;?> readonly><br>

			<label for="OrdenMedica">Orden medica: </label>
			<a title="OrdenMedica" download="<?php echo $ordenMedica;?>"> <?php echo $ordenMedica;?></a><br>

			<label for="HistoriaClinica">Historia clinica: </label>
			<a title="HistoriaClinica" download="<?php echo $historiaClinica;?>"> <?php echo $historiaClinica;?></a><br>

			<label for="Observaciones">Observaciones: </label>
			<input readonly class="soloLectura" type="text" id="Observaciones" name="Observaciones" value = <?php echo $observaciones;?>><br>

		</form>
		<button onclick="location.href='EmpleadoMuestraSolicitudesDesdeMostrarClientes.php<?php echo"?empleado=$empleado&cliente=$cliente"?>'"> Volver </button>		

    </body>
</html>