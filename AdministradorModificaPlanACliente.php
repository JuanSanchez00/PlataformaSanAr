<?php
	require 'conexion.php';
	session_start();
	$consulta = "SELECT nombre, apellido, plan, DNI FROM Cliente WHERE DNI = ".$_POST['ModificarPlan'].";";
	$resultado = mysqli_query($conexion,$consulta);
	$admin = $_GET['admin'];
	if ($resultado){
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			$dni =  $row['DNI'];
			$Plan = $row['plan'];
		}
	}	
?>

<html>
	<head>
		<title>Modificar Plan del Cliente</title>
	</head>
	<body>
		<h1>Modificar Plan</h1>

        <form action= "modificarPlanAClienteDesdeAdmin.php<?php echo "?admin=$admin"?>" method="POST">

			
			<label for="ClienteSeleccionado">Cliente seleccionado: </label><br>
			<input  class="soloLectura" type="text" id="ClienteSeleccionado" name="ClienteSeleccionado" value = "<?php echo $nombre; echo  " $apellido";?>"  readonly><br>
		
			<label for="PlanActual">Plan actual: </label><br>
			<input class="soloLectura" type="text" id="PlanActual" name="PlanActual" value = <?php echo $Plan;?>  readonly><br>

			<label for="PlanesNuevos">Planes nuevos: </label><br>
			<select id="PlanesNuevos" name="PlanesNuevos">
				<?php
				

				$consulta = "SELECT nombre FROM plan WHERE nombre !='".$Plan."';";
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
	
		</select id="PlanesNuevos" name="PlanesNuevos" required>
		<button name = "DNI" value = '<?php echo $dni ?>'> Confirmar </button>

    	</form>

    	<button onclick="location.href='PantallaAdministrador.php?admin=<?php echo $admin?>'"> Cancelar </button>
	</body>

</html>
