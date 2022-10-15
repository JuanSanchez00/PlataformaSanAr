<h1>Listado Planes</h1>
	
	<form action="AdministradorModificaPlan.php<?php echo "?admin=$admin" ?>" method="POST">
		<label for="Planes">Planes: </label>
		<select id="Planes" name="Planes">
			<?php
			require 'conexion.php';
			session_start();

			$consulta = "SELECT nombre FROM Plan";
			$resultado = mysqli_query($conexion,$consulta);
			if ($resultado) {
				while ($row = $resultado->fetch_array()) {
					$nombre = $row['nombre'];
					?>
					<option><?php echo $nombre;?></option>
					<?php
				}
			}
			?>
	
		</select id="Planes" name="Planes" required><br>
		<button> Editar </button>
		
	</form>
	<button> Inscribir cliente </button>
	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
