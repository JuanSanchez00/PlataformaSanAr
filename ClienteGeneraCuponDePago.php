<html>
	<head>
		<h1>Generar Cupon de Pago</h1>
	</head>
	<body>
		<?php 
			$cliente=$_GET["cliente"];
		?>

		<select id="selectMensual" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Generar cupon de pago mensual</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Enero</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Febrero</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Marzo</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Abril</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Mayo</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Junio</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Julio</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Agosto</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Septiembre</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Octubre</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Noviembre</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Diciembre</option>

		</select>

		<br><br>

		<select id="selectSemestral" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Generar cupon de pago semestral</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Primer semestre</option>
			<option value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"?>">Segundo semestre</option>
		</select>

		<br><br>

		<button id="anual" onclick="location.href='GenerarCuponDePago.php?cliente=<?php echo $cliente?>'"> Generar cupon de pago anual </button>

		<script>
			const date = new Date()
			var dia = date.getDate()
			var mes = date.getMonth()
			var pagoMensual = document.getElementById("selectMensual");
			for (var i = 0; i < pagoMensual.length; i++) {
				if(mes<i-1){
					pagoMensual.options[i].disabled = true;
				}
			}

			var pagoSemestral = document.getElementById("selectSemestral");
			var pagoAnual = document.getElementById("anual");
			if(dia>10){
				pagoSemestral.options[1].disabled = true;
				pagoSemestral.options[2].disabled = true;
				pagoAnual.disabled = true;
			}
			else{
				if(mes!=0){
					pagoSemestral.options[0].disabled = true;
					pagoAnual.disabled = true;
				}
				if(mes!=5){
					pagoSemestral.options[1].disabled = true;
				}
			}

		</script>
		
		<br><br>
		<button onclick="location.href='PantallaCliente.php?cliente=<?php echo $cliente?>'"> Volver </button>
	</body>
</html>