<?php
	require 'conexion.php';
	session_start();

	$empleado = $_GET['empleado'];

	$arreglo = array("Abierta","Analisis", "Aprobada", "Desaprobada");

    $consulta = "SELECT id, estado, tipo, DNI, apellido, nombre FROM solicitudes JOIN cliente WHERE DNI_cliente = DNI;";

	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$id = $row['id'];
			$estado = $row['estado'];
			$tipo = $row['tipo'];
			$tipo2 = explode(" ",$tipo);
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			$DNI = $row['DNI'];
	?>

			<tr>
      			<th><?php echo $id;?></th >
      			<th><?php echo $tipo2[0];?></th>
      			<th><?php echo $apellido; ?></th>
      			<th><?php echo $nombre ?></th>
      			<th><?php echo $DNI; ?></th>
                <th><button class="botones" name = "<?php echo $id?>" value = "<?php echo $tipo ?>" onclick=funcion(this)> Mas detalles </button></th >
      			<th>
      				<form method="POST">
	      				<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
							<option selected><?php echo $estado?></option>
	 						<?php $i =0; $arreglo2 = $arreglo; $clave = array_search($estado, $arreglo2); unset($arreglo2[$clave]); foreach ($arreglo2 as $item){ ?>
							<option value="ConfirmacionEmpleadoCambiaEstadoSolicitud.php?empleado=<?php echo $empleado;?>&id=<?php echo $id;?>&estado=<?php echo $item;?>" > <?php echo $item; ?> </option>
							<?php $i= $i+1; } ?>
						</select>
					</form>
				</th>
    		</tr>

			<script type="text/javascript">
				function funcion(e){

					if(e.value == "Reintegro"){
						window.location.href = "masInfoReintegroDesdeEmpleado.php?empleado=<?php echo $empleado;?>&id="+e.name;
					}
					if (e.value == "Prestacion Institucion"){
						window.location.href = "masInfoPrestacionInstitucionalDesdeEmpleado.php?empleado=<?php echo $empleado;?>&id="+e.name;
					}

					if(e.value == "Prestacion Profesional"){
						window.location.href = "masInfoPrestacionProfesionalDesdeEmpleado.php?empleado=<?php echo $empleado;?>&id="+e.name;
					}
				}		
			</script>
    <?php
            }
        }
    ?>