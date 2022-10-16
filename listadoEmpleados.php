<h1>Listado Empleados</h1>
	
	<form>
		<label for="EmpleadosL">Empleados: </label>
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
					<option id="seleccionada" selected value = <?php echo $dni;?> ><?php echo $nombre; echo " $apellido";?></option>
					<?php
				}
			}
			?>
	
		</select id="Empleados" name="Empleados" required><br>
	</form>

	<form action="AdministradorModificaEmpleado.php<?php echo "?admin=$admin"?>" method="POST">
		<button name = "ModificarEmpleado" id = "ModificarEmpleado" value = <?php echo $dni;?>> Editar Datos Basicos </button>
	</form>
	<form action="AdministradorModificaSeguridadEmpleado.php<?php echo "?admin=$admin" ?>" method="POST">
		<button name = "ModificarSeguridad" id = "ModificarSeguridad" value = <?php echo $dni;?>> Editar datos de seguridad </button>
	</form>

	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

<script type="text/javascript">
	let drop = document.getElementById('Empleados');
	drop.onchange = (ew) => {
		//console.log(drop.value);
		document.getElementById('ModificarEmpleado').value = drop.value;
		document.getElementById('ModificarSeguridad').value = drop.value;
		// MAS BOTONES SE AGREGAN ACA		
	}
</script>