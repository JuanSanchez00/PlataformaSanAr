<h1>Listado Clientes</h1>
	<form action="AdministradorModificaCliente.php<?php echo "?admin=$admin" ?>" method="POST">
		<label for="Clientes">Clientes: </label>
		<select id="Clientes" name="Clientes" >
			<?php
				require 'conexion.php';
				session_start();

				$consulta = "SELECT nombre, apellido, DNI FROM Cliente";
				
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
		</select required><br>
		<p></p> 	
		<button> Modificar Datos Basicos </button>
	</form>

		<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
