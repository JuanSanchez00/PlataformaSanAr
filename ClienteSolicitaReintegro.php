<html>
	<head>
		<title>Solicitud reintegro</title>
	</head>
	<body>
		<h1>SOLICITUD REINTEGRO</h1>
		<?php $cliente=$_GET["cliente"];?>

		<label>Seleccione qué datos ingresará:</label>
		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled></option>
		    <option value="ClienteSolicitaReintegroCompra.php<?php echo"?cliente=$cliente"?>">Compra</option>
		    <option value="ClienteSolicitaReintegroPrestacionProfesional.php<?php echo"?cliente=$cliente"?>">Prestación - Profesional</option>
		    <option value="ClienteSolicitaReintegroPrestacionInstitucion.php<?php echo"?cliente=$cliente"?>">Prestación - Institución</option>
		</select>	

		<br> <br> <button onclick="location.href='PantallaCliente.php<?php echo"?cliente=$cliente"?>'"> Cancelar </button>		
	</body>
</html>