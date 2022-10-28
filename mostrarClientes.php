<?php
	require 'conexion.php';
	session_start();

	$consulta = "SELECT * FROM Cliente";

	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			$dni =  $row['DNI'];
			$fecha = $row['fecha_nac'];
			$password = $row['password'];
			$email =  $row['email'];
			$provincia = $row['provincia'];
			$localidad = $row['localidad'];
			$calle =  $row['calle'];
			$depto = $row['depto'];
			$cp = $row['CP'];
			$tel =  $row['tel'];
			$plan =  $row['plan'];

			$q = "SELECT COUNT(*) as contar FROM Cliente_menor WHERE DNI_tutor = ".$dni."";
			$consulta = mysqli_query($conexion,$q);
			$array = mysqli_fetch_array($consulta);

			if ($array['contar']==0) {
				$tieneMenor = "NO";
			}
			else {
				$tieneMenor = "SI";
			}

			?>
			<tr>
      			<th><?php echo $nombre;?></th>
      			<th><?php echo $apellido;?></th>
      			<th><?php echo $fecha;?></th>
      			<th><?php echo $dni;?></th>
      			<th><?php echo $email;?></th>
      			<th><?php echo $provincia;?></th>
      			<th><?php echo $localidad;?></th>
      			<th><?php echo $calle;?></th>
      			<th><?php echo $depto;?></th>
      			<th><?php echo $cp;?></th>
      			<th><?php echo $tel;?></th>
      			<th><?php echo $tieneMenor;?></th>
      			<th><?php echo $plan;?></th>
      			<th>
      				<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
			   			<option value="" selected disabled>Operaciones</option>
			    		<option value="AdministradorAsociaMenorDesdeMostrarClientes.php<?php echo"?admin=$admin&cliente=$dni"?>">Asociar cliente menor de edad</option>
			    		<option value="AdministradorModificaClienteDesdeMostrarClientes.php<?php echo"?admin=$admin&cliente=$dni"?>">Modificar datos básicos</option>
			    		<option value="AdministradorModificaSeguridadClienteDesdeMostrarClientes.php<?php echo"?admin=$admin&cliente=$dni"?>">Modificar datos de seguridad</option>
			    		<option value="AdministradorMuestraSolicitudesDesdeMostrarClientes.php<?php echo"?admin=$admin&cliente=$dni"?>">Mostrar solicitudes</option>
			    		<option value="ConfirmacionAdministradorEliminaClienteDesdeMostrarCliente.php<?php echo"?admin=$admin&cliente=$dni"?>">Eliminar Cliente</option>
			    		<option value="AdministradorModificaPlanAClienteDesdeMostrarCliente.php<?php echo"?admin=$admin&cliente=$dni"?>">Modificar datos del plan</option>
			    	</select>	
				</th>
    		</tr>
		<?php
				}
			}
		?>