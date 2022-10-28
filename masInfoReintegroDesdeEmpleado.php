<?php
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];
	$id = $_GET['id'];
	
	$consultaCompra = "SELECT cuitcuil,fecha, orden_medica, factura,historia_clinica, observaciones FROM solicitud_reintegro_compra WHERE id = '".$id."';";
	$resultadoCompra = mysqli_query($conexion,$consultaCompra);

	if ($resultadoCompra){
		while ($row = $resultadoCompra->fetch_array()) {
			$nombreInstitucion = $row['cuitcuil'];
			$fecha = $row['fecha'];
			$ordenMedica = $row['factura'];
			$historiaClinica = $row['historia_clinica'];
			$observaciones = $row['observaciones'];
		}
	}

	$consultaRPI = "SELECT cuitcuil,fecha, orden_medica, factura,historia_clinica, observaciones FROM solicitud_reintegro_prestacion_institucion WHERE id = '".$id."';";
	$resultadoRPI = mysqli_query($conexion,$consultaRPI);
	if ($resultadoRPI){
		while ($row = $resultadoRPI->fetch_array()) {
			$nombreInstitucion = $row['cuitcuil'];
			$fecha = $row['fecha'];
			$ordenMedica = $row['factura'];
			$historiaClinica = $row['historia_clinica'];
			$observaciones = $row['observaciones'];
		}
	}
	
	$consultaRPP = "SELECT cuitcuil,fecha, orden_medica, factura,historia_clinica, observaciones FROM solicitud_reintegro_prestacion_profesional WHERE id = '".$id."';";
	$resultadoRPP = mysqli_query($conexion,$consultaRPP);
	if ($resultadoRPP){
		while ($row = $resultadoRPP->fetch_array()) {
			$nombreInstitucion = $row['cuitcuil'];
			$fecha = $row['fecha'];
			$ordenMedica = $row['factura'];
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

			<label for="cuitcuil">Cuit/Cuil: </label>
			<input class="soloLectura" type="number" id="cuitcuil" name="cuitcuil" value = <?php echo $nombreInstitucion;?> readonly><br>

			<label for="Fecha">Fecha: </label>
			<input class="soloLectura" type="date" id="Fecha" name="Fecha" value = "<?php echo $fecha;?>" readonly><br>

			<label for="OrdenMedica">Orden medica: </label>
			<a title="OrdenMedica"> <?php echo $ordenMedica;?></a><br>

			<label for="factura">Factura: </label>
			<a title="factura"> <?php echo $ordenMedica;?></a><br>

			<label for="HistoriaClinica">Historia clinica: </label>
			<a title="HistoriaClinica"> <?php echo $historiaClinica;?></a><br> 

			<label for="Observaciones">Observaciones: </label>
			<textarea name="Observaciones" id="Observaciones" readonly="readonly" > <?php echo $observaciones;?> </textarea><br>
		</form>
		<button onclick="location.href='EmpleadoListaSolicitudes.php<?php echo"?empleado=$empleado"?>'"> Volver </button>		
    </body>

</html>
