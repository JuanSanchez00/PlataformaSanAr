<?php
	require 'conexion.php';
	session_start();

	$consulta = "SELECT * FROM empleado";

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
			$rol =  $row['rol'];
			$sucursal = $row['sucursal'];

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
      			<th><?php echo $rol;?></th>
      			<th><?php echo $sucursal;?></th>
      			<th>
      				<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
			   			<option value="" selected disabled>Operaciones</option>
			    		<option value="AdministradorModificaEmpleado.php<?php echo "?admin=$admin&empleado=$dni"?>">Editar datos basicos</option>
			    		<option value="AdministradorModificaSeguridadEmpleado.php<?php echo "?admin=$admin&empleado=$dni"?>">Editar datos de segurid</option>
			    		<option value="ConfirmacionAdministradorEliminaEmpleadoDesdeMostrarEmpleado.php<?php echo "?admin=$admin&empleado=$dni"?>">Eliminar</option>
			    	</select>	
				</th>
    		</tr>
		<?php
				}
			}
		?>