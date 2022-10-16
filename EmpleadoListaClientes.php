<html>
	<head>
		<title>Listado Clientes</title>
	</head>

	<body>
		<?php
			$empleado = $_GET['empleado'];
		?>
		<h1>Listado Clientes</h1>
	<form method="POST">
		<label for="Clientes">Clientes: </label>
		<select id="Clientes" name="Clientes" >
			<?php
				require 'conexion.php';
				session_start();

				$consulta = "SELECT nombre, apellido, DNI FROM Cliente ORDER BY nombre ASC";
				
				$resultado = mysqli_query($conexion,$consulta);
				if ($resultado) {
					while ($row = $resultado->fetch_array()) {
						$nombre = $row['nombre'];
						$apellido = $row['apellido'];
						$dni =  $row['DNI'];
						$Plan = $row['plan'];
			?>
						<option value = <?php echo $dni;?> <?php echo $Plan;?> ><?php echo $nombre; echo " $apellido";?></option>
			<?php
					}
				}
			?>
		</select required><br>
		<p></p> 	
		<button onclick="this.form.action='EmpleadoModificaCliente.php?empleado=<?php echo $empleado?>'"> Modificar datos básicos </button><br>
		<button > Editar datos de seguridad </button><br>
		<br>
		<button onclick="this.form.action='EmpleadoModificaPlanACliente.php?empleado=<?php echo $empleado?>'"> Modificar plan </button><br>
		<button > Asociar menor al plan </button><br>
		
	</form>

	<button onclick="location.href='PantallaEmpleado.php?empleado=<?php echo $empleado?>'"> Cancelar </button>
	</body>

</html>