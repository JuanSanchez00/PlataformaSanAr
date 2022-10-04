<h1>Listado Empleados</h1>
	
	<form action="AdministradorModificaEmpleado.php<?php echo "?admin=$admin" ?>" method="POST">
		<label for="Empleados">Empleados: </label>
		<select id="Empleados" name="Empleados" >
			<?php
			require 'conexion.php';
			session_start();

			$consulta = "SELECT nombre, apellido, DNI FROM Empleado";
			$resultado = mysqli_query($conexion,$consulta);
			if ($resultado) {
				while ($row = $resultado->fetch_array()) {
					$nombre = $row['nombre'];
					$apellido = $row['apellido'];
					$dni =  $row['DNI'];
					?>
					<option value = <?php echo $dni;?> ><?php echo $nombre; echo " $apellido";?></option>
					<?php
				}
			}
			?>
	
		</select id="Empleados" name="Empleados" required><br>
		<button> Modificar Datos Basicos </button>
	</form>

	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
