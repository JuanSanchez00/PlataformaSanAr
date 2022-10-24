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
					<option selected><?php echo $nombre;?></option>
					<?php
				}
			}
			?>
	
		</select id="Planes" name="Planes" required><br>
		<button> Editar </button>
	</form>

	<form action="AdministradorEliminaPlan.php<?php echo "?admin=$admin"?>"  method="POST">
		<button name="Eliminar" id="Eliminar" value="<?php echo $nombre;?>"> Eliminar plan </button>		
	</form>

	<button> Inscribir cliente </button>
	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

	<script type="text/javascript">
		let drop = document.getElementById('Planes');
		drop.onchange = (ew) => {
			document.getElementById('Eliminar').value = drop.value;
		}
	</script>