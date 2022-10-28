<html>
	<head>
		<h1>Generar Cupon de Pago</h1>
	</head>
	<body>
		<?php $cliente=$_GET["cliente"];?>
		
		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Operaciones</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Generar cupon de pago mensual</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Generar cupon de pago semestral</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Generar cupon de pago anual</option>
		</select>
		
		<br>
		<button onclick="location.href='PantallaCliente.php'"> Volver </button>
	</body>
</html>