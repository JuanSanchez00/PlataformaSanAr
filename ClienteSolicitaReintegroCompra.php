<html>
	<head>
		<title>Solicitud reintegro por compra</title>
	</head>
	<body>
		<?php $cliente=$_GET["cliente"];?>
		<h1>SOLICITUD REINTEGRO</h1>
		<h3>Compra</h3>
		<p>Recuerde que todos los datos marcados con asteristco (*) deben completarse obligatoriamente.</p>

		<form type="POST" enctype="multipart/formdata">
			<label for="CUIT/CUIL"> CUIT/CUIL(*): </label>
			<input type="number" id="CUIT/CUIL" name="CUIT/CUIL" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>
			<label for="Fecha"> Fecha(*): </label>
			<input type="date" id="Fecha" name="Fecha" required><br>
			<label for="OrdenMedica"> Orden Médica(*): </label>
			<input type="file" name="OrdenMedica" required /><br>
			<label for="Factura"> Factura(*): </label>
			<input type="file" name="Factura" required /><br>
			<label for="HistoriaClinica"> Historia Clinica: </label>
			<input type="file" name="HistoriaClinica"/><br>
			<label for="Observaciones"> Observaciones: </label>
			<input type="text" name="Observaciones"/>
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
		</script>	
	</body>
</html>