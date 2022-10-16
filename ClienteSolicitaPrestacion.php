<html>
	<head>
		<title>ClienteSolicitaPrestacion</title>
	</head>
	<body>
		<h1>Solicitud Prestacion</h1>
		<?php $cliente=$_GET["cliente"];?>

			<label for="Seleccion">Seleccione que datos ingresara: </label>
			<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
				<option value="" selected disabled></option>
				<option value="SolicitudPrestacionProfesional.php<?php echo"?cliente=$cliente"?>" >Profesional</option>
				<option value="SolicitudPrestacionInstitucion.php<?php echo"?cliente=$cliente"?>" >Institucion</option>
			</select><br>
			
			<br> <br> 
			<button onclick="location.href='PantallaCliente.php<?php echo"?cliente=$cliente"?>'"> Cancelar </button>		

    </body>

	

</html>