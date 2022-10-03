<?php
	require 'conexion.php';
	session_start();

	$consulta = "SELECT nombre FROM Plan";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			?>
			<option><?php echo $nombre; ?></option>
			<?php
		}
	}
	?>