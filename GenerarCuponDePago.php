<html>
	<head>
		<h1>Cupon de Pago - SanAr</h1>
	</head>
	<body>
		<?php
			require 'conexion.php';
			session_start();
			$cliente=$_GET["cliente"];

			$arreglo=explode("*",$cliente);
			$cliente=$arreglo[0];
			$option=$arreglo[1];

			$consulta = "SELECT nombre, apellido, DNI, plan FROM Cliente WHERE DNI = ".$cliente.";";

			$resultado = mysqli_query($conexion,$consulta);

			if ($resultado){
				while ($row = $resultado->fetch_array()) {
					$Nombre = $row['nombre'];
					$Apellido = $row['apellido'];
					$Dni = $row['DNI'];
					$Plan = $row['plan'];
				}
			}	

			$MenorACargo = "No";
			$NombreMenor = "";
			$ApellidoMenor = "";
			$DniMenor = "";
			
			$consulta2 = "SELECT Cliente_menor.nombre, Cliente_menor.apellido, Cliente_menor.DNI FROM Cliente INNER JOIN Cliente_menor ON Cliente.DNI=Cliente_menor.DNI_tutor WHERE Cliente.DNI = ".$cliente.";";

			$resultado2 = mysqli_query($conexion,$consulta2);

			if(!empty($resultado2)){
				while($row = $resultado2->fetch_array()){
					$MenorACargo = "Si";
					$NombreMenor = $row['nombre'];
					$ApellidoMenor = $row['apellido'];
					$DniMenor = $row['DNI'];
				}
			}
		?>

		<label for="Nombre">Nombre: </label>
		<label for="ValNombre"><?php echo $Nombre;?></label><br>

		<label for="Apellido">Apellido: </label>
		<label for="ValApellido"><?php echo $Apellido;?></label><br>

		<label for="DNI">DNI: </label>
		<label for="ValDni"><?php echo $Dni;?></label><br>

		<label for="MenorACargo">Menor a cargo: </label>
		<label for="ValMenorACargo"><?php echo $MenorACargo;?></label><br>

		<label for="NombreMenor">Nombre: </label>
		<label for="ValNombreMenor"><?php echo $NombreMenor;?></label><br>

		<label for="ApellidoMenor">Apellido: </label>
		<label for="ValApellidoMenor"><?php echo $ApellidoMenor;?></label><br>

		<label for="DNIMenor">DNI: </label>
		<label for="ValDniMenor"><?php echo $DniMenor;?></label><br>

		<label for="MontoMenor">Monto: </label>
		<label for="ValMontoMenor"></label><br>

		<label for="Fecha de vencimiento">Fecha de vencimiento: </label>
		<label id="valFechaVencimiento" for="ValFechaVencimiento"></label><br>

		<label for="Plan">Plan: </label>
		<label for="ValPlan"><?php echo $Plan;?></label><br>

		<label for="Cuota">Cuota: </label>
		<label id="valCuota" for="ValCuota"></label><br>

		<label for="Monto">Monto: </label>
		<label for="ValMonto"></label><br>

		<button onclick="location.href='ClienteGeneraCuponDePago.php?cliente=<?php echo $cliente?>'"> Volver </button>
		<button> Imprimir </button>

		<script>
			const currentDate = new Date()
			var currentDay = currentDate.getDate()
			var currentMonth = currentDate.getMonth()
			var currentYear = currentDate.getFullYear()
			const fechaVencimiento = new Date()
			
			if(currentMonth == 11){
				fechaVencimiento.setMonth(0)
				fechaVencimiento.setFullYear(currentYear+1)
			}
			else{
				fechaVencimiento.setMonth(currentMonth+1)
			}


			//0 a 11 son los meses de opcion de pago mensual, 12 y 13 semestral y 14 anual
			var option = <?php echo json_encode($option, JSON_HEX_TAG);?>;
			document.getElementById("valFechaVencimiento").innerHTML = fechaVencimiento.toDateString();
		</script>

	</body>
</html>