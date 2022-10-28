<?php
	require 'conexion.php';
	session_start();

	$cliente = $_GET['cliente'];

	$id = $_GET['id'];

	$consulta = "SELECT nombre, apellido,fecha, orden_medica, historia_clinica, observaciones FROM solicitud_prestacion_profesional WHERE id = '".$id."';";
	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado){
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
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

			<label for="Nombre">Nombre: </label>
			<input class="soloLectura" type="text" id="Nombre" name="Nombre" value = <?php echo $nombre;?> readonly><br>

			<label for="Apellido">Apellido: </label>
			<input class="soloLectura" type="text" id="Apellido" name="Apellido" value = <?php echo $apellido;?> readonly><br>

			<label for="Fecha">Fecha: </label>
			<input class="soloLectura" type="date" id="Fecha" name="Fecha" value = <?php echo $fecha;?> readonly><br>

			<label for="OrdenMedica">Orden medica: </label>
			<a title="OrdenMedica" download="<?php echo $ordenMedica;?>"> <?php echo $ordenMedica;?></a><br>

			<label for="HistoriaClinica">Historia clinica: </label>
			<a title="HistoriaClinica" download="<?php echo $historiaClinica;?>"> <?php echo $historiaClinica;?></a><br>

			<label for="Observaciones">Observaciones: </label>
			<textarea name="Observaciones" id="Observaciones" readonly="readonly" > <?php echo $observaciones;?> </textarea><br>

		</form>
		<button onclick="location.href='ListarSolicitudes.php<?php echo"?cliente=$cliente"?>'"> Volver </button>		

    </body>
</html>