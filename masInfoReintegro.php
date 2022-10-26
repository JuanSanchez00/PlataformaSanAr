<?php
	require 'conexion.php';
	session_start();

	$cliente = $_GET['cliente'];

	$id = $_GET['id'];
	$tipo = $_GET['tipo'];

	$consultaCompra = "SELECT cuitcuil,fecha, orden_medica, factura,historia_clinica, observaciones FROM solicitud_reintegro_compra WHERE id = '".$id."';";
	$resultadoCompra = mysqli_query($conexion,$consultaCompra);

	if ($resultadoCompra){
		while ($row = $resultado->fetch_array()) {
			$nombreInstitucion = $row['cuitcuil'];
			$direccionInstitucion = $row['fecha'];
			$fecha = $row['orden_medica'];
			$ordenMedica = $row['factura'];
			$historiaClinica = $row['historia_clinica'];
			$observaciones = $row['observaciones'];
		}
	}
	else{
		$consultaRPI = "SELECT cuitcuil,fecha, orden_medica, factura,historia_clinica, observaciones FROM solicitud_reintegro_prestacion_institucion WHERE id = '".$id."';";
		$resultadoRPI = mysqli_query($conexion,$consultaRPI);
		if ($resultadoRPI){
			while ($row = $resultado->fetch_array()) {
				$nombreInstitucion = $row['cuitcuil'];
				$direccionInstitucion = $row['fecha'];
				$fecha = $row['orden_medica'];
				$ordenMedica = $row['factura'];
				$historiaClinica = $row['historia_clinica'];
				$observaciones = $row['observaciones'];
			}
		}
		else{
			$consultaRPP = "SELECT cuitcuil,fecha, orden_medica, factura,historia_clinica, observaciones FROM solicitud_reintegro_prestacion_profesional WHERE id = '".$id."';";
			$resultadoRPP = mysqli_query($conexion,$consultaRPP);
			if ($resultadoRPP){
				while ($row = $resultado->fetch_array()) {
					$cuitcuil = $row['cuitcuil'];
					$fecha = $row['fecha'];
					$ordenMedica = $row['orden_medica'];
					$factura = $row['factura'];
					$historiaClinica = $row['historia_clinica'];
					$observaciones = $row['observaciones'];
				}
			}
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

			<label for="cuitcuil">Cuit/Cuil: </label>
			<input class="soloLectura" type="number" id="cuitcuil" name="cuitcuil" value = <?php echo $cuitcuil;?> readonly><br>

			<label for="Fecha">Fecha: </label>
			<input class="soloLectura" type="date" id="Fecha" name="Fecha" value = <?php echo $fecha;?> readonly><br>

			<label for="OrdenMedica">Orden medica: </label>
			<a title="OrdenMedica"> <?php echo $ordenMedica;?></a><br>

			<label for="factura">Factura: </label>
			<a title="factura"> <?php echo $factura;?></a><br>

			<label for="HistoriaClinica">Historia clinica: </label>
			<a title="HistoriaClinica"> <?php echo $historiaClinica;?></a><br>

			<label for="Observaciones">Observaciones: </label>
			<input readonly class="soloLectura" type="text" id="Observaciones" name="Observaciones" value = <?php echo $observaciones;?>><br>
		</form>
    </body>
	<button onclick="location.href='ListarSolicitudes.php<?php echo"?cliente=$cliente"?>'"> Volver </button>		

</html>
