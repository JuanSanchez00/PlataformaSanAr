<?php
	require 'conexion.php';
	session_start();
    
    $consulta = "SELECT id,estado,tipo FROM solicitudes WHERE DNI_cliente ='".$cliente."';";

	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$id = $row['id'];
			$estado = $row['estado'];
			$tipo = $row['tipo'];

	?>
			<tr>
      			<th><?php echo $id;?></th >
      			<th><?php echo $tipo;?></th>
                <th><button onclick="location.href='masInfoPrestacionInstitucion.php?id=<?php echo $id?>&tipo=<?php echo $tipo?>&cliente=<?php echo $cliente?>'"> Click </button></th >
      			<th><?php echo $estado;?></th>
    		</tr>
		
			
    <?php
            }
        }
    ?>
    


    