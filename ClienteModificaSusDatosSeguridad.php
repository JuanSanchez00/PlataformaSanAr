<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>Modificar Datos Cliente</title>
	</head>
	<body>
		<h1>Modificar datos de seguridad</h1>
		<p>Los campos con un (*) son obligatorios.</p>
		<?php
			require 'conexion.php';
			session_start();
			$cliente=$_GET["cliente"];
			$consulta = "SELECT nombre, apellido, fecha_nac, DNI, email, provincia, localidad, calle, depto, CP, tel, plan FROM Cliente 
			WHERE DNI = ".$cliente.";";

			$resultado = mysqli_query($conexion,$consulta);

			if ($resultado){
				while ($row = $resultado->fetch_array()) {
					$Nombre = $row['nombre'];
					$Apellido = $row['apellido'];
					$Fecha = $row['fecha_nac'];
					$Dni = $row['DNI'];
					$Email = $row['email'];
					$Provincia = $row['provincia'];
					$Localidad = $row['localidad'];
					$Calle = $row['calle'];
					$Depto = $row['depto'];
					$Cp = $row['CP'];
					$Tel = $row['tel'];
					$Plan = $row['plan'];
				}
			}	
		?>


       	<form action= "modificarSeguridadClienteDesdeCliente.php" method="POST">

       		<label for="Nombre">DNI: </label>
			<input class="SoloLectura" type="text" id="Nombre" name="Nombre" value = <?php echo $Dni;?> readonly><br><br>

			<label for="ContraseñaActual"> Contraseña Actual(*): </label>
			<input type="password" id="ContraseñaActual" name="ContraseñaActual" required><br><br>

			<label for="ContraseñaNueva"> Contraseña Nueva(*): </label>
			<input type="password" id="ContraseñaNueva" name="ContraseñaNueva" pattern="(?=.*\d)(?=.*[A-Z]).{1,}" title="Debe contener una mayuscula y un numero" required><br><br>

			<button for="Confirmar" name = "Cliente" value = <?php echo $cliente;?>> Confirmar </button><br>

       	</form>
       	<button onclick="location.href='PantallaCliente.php?cliente=<?php echo $cliente?>'"> Cancelar </button>


    </body>
   </html>