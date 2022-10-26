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
                <th><button class="botones" onclick=funcion()> Mas detalles </button></th >
      			<th><?php echo $estado;?></th>
    		</tr>
		
			<script type="text/javascript">
				function funcion(){

					const tipo = "<?php echo $tipo; ?>";

					const buttons = document.querySelectorAll(".botones");
					buttons.forEach((button) => {
						if(tipo=="Reintegro"){
							button.addEventListener("click", () =>  window.open('masInfoReintegro.php?cliente=<?php echo $cliente;?>&id=<?php echo $id;?>&tipo=<?php echo $tipo;?>',"_self"));
						}
							else{
								if(tipo=="Prestacion Profesional"){
									button.addEventListener("click", () =>  window.open('masInfoPrestacionProfesional.php?cliente=<?php echo $cliente;?>&id=<?php echo $id;?>&tipo=<?php echo $tipo;?>',"_self"));
								}
							
								else{
									
									if(tipo=="Prestacion Institucion"){
										button.addEventListener("click", () =>  window.open('masInfoPrestacionInstitucion.php?cliente=<?php echo $cliente;?>&id=<?php echo $id;?>&tipo=<?php echo $tipo;?>',"_self"));
									}
								}
							}
					})					
				}		
			</script>
    <?php
            }
        }
    ?>
    


    