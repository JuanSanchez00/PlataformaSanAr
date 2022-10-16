<html>
	<head>
		<title>ClienteSolicitaPrestacionProfesional</title>
	</head>
	<body>
        <h1>Solicitud Prestacion</h1>
        <h3>Profesional</h3>
        <?php $cliente=$_GET["cliente"];?>


		<p>Recuerde que todos los datos marcados con asteristco (*) deben completarse obligatoriamente.</p>
		<form  method="POST" enctype="multipart/formdata" action="solicitarPrestacionProfesional.php<?php echo "?cliente=$cliente"?>">

            <label for="Nombre">* Nombre: </label><br>
			<input  type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido">* Apellido: </label><br>
			<input  type="text" id="Apellido" name="Apellido" required><br>

			<label for="Fecha">* Fecha: </label><br>
			<input type="date" id="Fecha" name="Fecha" required><br>

            <label for="OrdenMedica">* Orden medica: </label><br>
            <input type="file" id="OrdenMedica" name="OrdenMedica" required /><br>

            <label for="HistoriaClinica">* Historia clinica: </label><br>
            <input type="file" id="HistoriaClinica" name="HistoriaClinica" required /><br>

            <label for="Observaciones">* Observaciones: </label><br>
			<input type="text" id="Observaciones" name="Observaciones" required><br>

            <button>Confirmar</button>

        </form>	
        <button onclick="location.href='PantallaCliente.php<?php echo"?cliente=$cliente"?>'"> Cancelar </button>		

    </body>
</html>