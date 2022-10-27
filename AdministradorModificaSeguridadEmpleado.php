<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>Modificar Datos Cliente</title>
	</head>
	<body>
		<h1>Modificar datos basicos</h1>

		<?php
			require 'conexion.php';
			session_start();
			$admin = $_GET["admin"];
			$empleado=$_GET["empleado"];
			$consulta = "SELECT nombre, apellido, fecha_nac, DNI, email, provincia, localidad, calle, depto, CP, tel, rol FROM Empleado 
			WHERE DNI = ".$empleado.";";

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
					$Rol = $row['rol'];
				}
			}	
		?>


       	<form action= "modificarSeguridadEmpleadoDesdeAdministrador.php?admin=<?php echo $admin?>" method="POST">
       		<p>Los campos marcados con (*) son obligatorios</p>

       		<label for="Nombre"> Nombre: </label>
			<input class="SoloLectura" type="text" id="Nombre" name="Nombre" value = <?php echo $Dni;?> readonly><br><br>

			<label for="ContraseñaNueva"> Contraseña Nueva(*): </label>
			<input type="password" id="ContraseñaNueva" name="ContraseñaNueva" pattern="(?=.*\d)(?=.*[A-Z]).{1,}" title="Debe contener una mayuscula y un numero" required><br><br>

			<button for="Confirmar" name = "Empleado" value = <?php echo $empleado;?>> Confirmar </button><br>

       	</form>
       	<button onclick="location.href='listarEmpleados.php?admin=<?php echo $admin?>'"> Cancelar </button>


    </body>
   </html>