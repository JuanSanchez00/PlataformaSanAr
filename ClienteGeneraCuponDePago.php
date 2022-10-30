<html>
	<head>
		<h1>Generar Cupon de Pago</h1>
	</head>
	<body>
		<?php 
			session_start();
			$cliente=$_GET["cliente"];
			$_SESSION['option']=1;
		?>

		<select name="Mensual" id="selectMensual" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Generar cupon de pago mensual</option>
			<option label="0" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*0";?>">Enero</option>
			<option label="1" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*1";?>">Febrero</option>
			<option label="2" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*2";?>">Marzo</option>
			<option label="3" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*3";?>">Abril</option>
			<option label="4" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*4";?>">Mayo</option>
			<option label="5" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*5";?>">Junio</option>
			<option label="6" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*6";?>">Julio</option>
			<option label="7" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*7";?>">Agosto</option>
			<option label="8" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*8";?>">Septiembre</option>
			<option label="9" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*9";?>">Octubre</option>
			<option label="10" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*10";?>">Noviembre</option>
			<option label="11" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*11";?>">Diciembre</option>
		</select>

		<br><br>

		<select id="selectSemestral" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Generar cupon de pago semestral</option>
			<option label="12" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*12";?>">Primer semestre</option>
			<option label="13" value="GenerarCuponDePago.php<?php echo"?cliente=$cliente"; echo"*13";?>">Segundo semestre</option>
		</select>

		<br><br>

		<button id="anual" onclick="location.href='GenerarCuponDePago.php?cliente=<?php echo $cliente; echo"*14";?>'"> Generar cupon de pago anual </button>

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