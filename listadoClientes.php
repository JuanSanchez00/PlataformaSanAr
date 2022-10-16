<h1>Listado Clientes</h1>
	<label for="ClientesL">Clientes: </label>
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
		?>
					<option id="seleccionada" selected value = <?php echo $dni;?> ><?php echo $nombre; echo " $apellido";?></option>
		<?php
				}
			}
		?>
	</select required><br>
	<p></p> 	
	<form action="AdministradorModificaCliente.php<?php echo "?admin=$admin"?>" method="POST">
		<button name = "ModificarCliente" id = "ModificarCliente" value = <?php echo $dni;?>> Editar Datos Basicos </button>
	</form>
	<form action="AdministradorModificaSeguridadCliente.php<?php echo "?admin=$admin" ?>" method="POST">
		<button name = "ModificarSeguridad" id = "ModificarSeguridad" value = <?php echo $dni;?>> Editar datos de seguridad </button>
	</form>
	<form>
		<button disabled> Asociar Menor al Plan </button>
	</form>
	<form action="AdministradorModificaPlanACliente.php<?php echo "?admin=$admin" ?>" method="POST">
		<button name = "ModificarPlan" id = "ModificarPlan" value = <?php echo $dni;?> > Modificar Plan </button>
	</form>

		<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

<script type="text/javascript">
	let drop = document.getElementById('Clientes');
	drop.onchange = (ew) => {
		//console.log(drop.value);
		document.getElementById('ModificarCliente').value = drop.value;
		document.getElementById('ModificarSeguridad').value = drop.value;
		document.getElementById('ModificarPlan').value = drop.value;
		// MAS BOTONES SE AGREGAN ACA		
	}
</script>