<h1>Listado Clientes</h1>
		<form>
			<label for="Clientes">Clientes: </label>
			<select>
<?php
	require 'conexion.php';
	session_start();

	$consulta = "SELECT nombre, apellido FROM Cliente";
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
	
	</select id="Clientes" name="Clientes" required><br>

	</form>
		<button onclick="location.href='AdministradorModificaCliente.html'"> Modificar Datos Basicos </button><br>
		<button onclick="location.href='PantallaAdministrador.html'"> Cancelar </button>
