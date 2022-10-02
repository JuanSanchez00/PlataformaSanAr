<h1>Listado Empleados</h1>
		<form>
			<label for="Empleados">Empleados: </label>
			<select>
<?php
	require 'conexion.php';
	session_start();

	$consulta = "SELECT nombre, apellido FROM Empleado";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			?>
			<option><?php echo $nombre; echo " $apellido";?></option>
			<?php
		}
	}
	?>
	
	</select id="Empleados" name="Empleados" required><br>

	</form>
		<button onclick="location.href='AdministradorModificaEmpleado.html'"> Modificar Datos Basicos </button><br>
		<button onclick="location.href='PantallaAdministrador.html'"> Cancelar </button>
