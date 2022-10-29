<html>
	<head>
		<title>Solicitud reintegro por compra</title>
	</head>
	<body>
		<?php $cliente=$_GET["cliente"];?>
		<h1>SOLICITUD REINTEGRO</h1>
		<h3>Prestación - Compra</h3>
		<p>Los campos con un (*) son obligatorios.</p>

		<form  method="POST" enctype="multipart/formdata" action="solicitarReintegroCompra.php<?php echo "?cliente=$cliente"?>">
			<label for="CUITCUIL"> CUIT/CUIL(*): </label>
			<input type="number" id="CUITCUIL" name="CUITCUIL" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>
			<label for="Fecha"> Fecha(*): </label>
			<input type="date" id="Fecha" name="Fecha" onchange="return validarFecha(event);"ondrop="return false;" onpaste="return false;" required><br>
			<label for="OrdenMedica"> Orden Médica(*): </label>
			<input type="file" name="OrdenMedica" required /><br>
			<label for="Factura"> Factura(*): </label>
			<input type="file" name="Factura" required /><br>
			<label for="HistoriaClinica"> Historia Clinica: </label>
			<input type="file" name="HistoriaClinica"/><br>
			<label for="Observaciones"> Observaciones: </label>
			<textarea name="Observaciones"></textarea>
			<br><button>Confirmar</button>
		</form>
		
		<br> <br> <button onclick="location.href='ClienteSolicitaReintegro.php<?php echo"?cliente=$cliente"?>'"> Cancelar </button>	


		<script type="text/javascript">
			function SoloEnteroPositivo(e) {
			    var theEvent = e || window.event;
			    var key = theEvent.keyCode || theEvent.which;
			    key = String.fromCharCode(key);
			    var regex = /[^,.;]+$/;
			    if (!regex.test(key)) {
			        theEvent.returnValue = false;
			        if (theEvent.preventDefault) {
			            theEvent.preventDefault();
			        }
			    }
			}

			function validarFecha(){
			    fecha = document.getElementById('Fecha').value; 	
			   	fechaParseada = fecha.split("-");
			   	FechaInicio = new Date(fechaParseada[0],fechaParseada[1],fechaParseada[2]-31);
			   	FechaActual = new Date();
			    
				var dif = FechaActual - FechaInicio;
				var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

				if(dias < 1){
					alert("La fecha ingresada debe ser como mínimo 24hs antes de la fecha actual.");
					document.getElementById('Fecha').value = "";
				}
    		}
		</script>	
	</body>
</html>