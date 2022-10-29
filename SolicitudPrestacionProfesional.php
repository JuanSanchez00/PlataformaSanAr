<html>
	<head>
		<title>ClienteSolicitaPrestacionProfesional</title>
	</head>
	<body>
        <h1>Solicitud Prestacion</h1>
        <h3>Profesional</h3>
        <?php $cliente=$_GET["cliente"];?>


		<p>Los campos con un (*) son obligatorios.</p>
		<form  method="POST" enctype="multipart/formdata" action="solicitarPrestacionProfesional.php<?php echo "?cliente=$cliente"?>">

            <label for="Nombre">Nombre(*): </label><br>
			<input  type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido">Apellido(*): </label><br>
			<input  type="text" id="Apellido" name="Apellido" required><br>

			<label for="Fecha">Fecha(*): </label><br>
			<input type="date" id="Fecha" name="Fecha" onchange="return validarFecha(event);"ondrop="return false;" onpaste="return false;" required><br>

            <label for="OrdenMedica">Orden medica(*): </label><br>
            <input type="file" id="OrdenMedica" name="OrdenMedica" required /><br>

            <label for="HistoriaClinica">Historia clinica: </label><br>
            <input type="file" id="HistoriaClinica" name="HistoriaClinica"  /><br>

            <label for="Observaciones">Observaciones: </label><br>
			<input type="text" id="Observaciones" name="Observaciones" ><br>

            <button>Confirmar</button>

        </form>	
        <button onclick="location.href='PantallaCliente.php<?php echo"?cliente=$cliente"?>'"> Cancelar </button>		
        <script type="text/javascript">
			function validarFecha(){
			    	fecha = document.getElementById('Fecha').value; 	
			    	fechaParseada = fecha.split("-");
			    	FechaInicio = new Date(fechaParseada[0],fechaParseada[1],fechaParseada[2]-31);
			    	FechaActual = new Date();
			    
					var dif = FechaInicio - FechaActual ;
					var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

					if(dias < 1){
                        alert("La fecha ingresada debe ser como mínimo 24hs despues de la fecha actual.");
						document.getElementById('Fecha').value = "";
					}
    			}
		</script>
    </body>
</html>
