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
			$tipo2 = explode(" ",$tipo);
	?>

			
			<tr>
      			<th><?php echo $id;?></th >
      			<th><?php echo $tipo2[0];?></th>
                <th><button class="botones" value = "<?php echo $tipo; echo " $id";?>" onclick=funcion(this)> Mas detalles </button></th >
      			<th><?php echo $estado;?></th>
    		</tr>
		
			<script type="text/javascript">
				function funcion(e){
					var cadena = e.value;
					cadena = cadena.split(" ");

					if(cadena.length==3){
						var tipo = cadena[0] + " "+ cadena[1];
					}
					else{
						var tipo = cadena[0];
					}

					var id = cadena[cadena.length-1];

					if(tipo == "Reintegro"){
						window.open('masInfoReintegro.php?cliente=<?php echo $cliente;?>&id='+id,"_self");
					}
					if (tipo == "Prestacion Institucion"){
						window.open('masInfoPrestacionInstitucion.php?cliente=<?php echo $cliente;?>&id='+id,"_self");

					}
					if(tipo == "Prestacion Profesional"){
						window.open('masInfoPrestacionProfesional.php?cliente=<?php echo $cliente;?>&id='+id,"_self");

					}

				}		
			</script>
    <?php
            }
        }
    ?>
    


    