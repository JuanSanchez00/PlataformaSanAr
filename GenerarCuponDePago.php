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

			$consulta = "SELECT nombre, apellido, fecha_nac, DNI, plan FROM Cliente WHERE DNI = ".$cliente.";";

			$resultado = mysqli_query($conexion,$consulta);

			if ($resultado){
				while ($row = $resultado->fetch_array()) {
					$Nombre = $row['nombre'];
					$Apellido = $row['apellido'];
					$FechaNacimiento = $row['fecha_nac'];
					$Dni = $row['DNI'];
					$Plan = $row['plan'];
				}
			}	

			$Menor = 0;
			$MenorACargo = "No";
			$NombreMenor = "";
			$ApellidoMenor = "";
			$DniMenor = "";
			
			$consulta2 = "SELECT Cliente_menor.nombre, Cliente_menor.apellido, Cliente_menor.DNI FROM Cliente INNER JOIN Cliente_menor ON Cliente.DNI=Cliente_menor.DNI_tutor WHERE Cliente.DNI = ".$cliente.";";

			$resultado2 = mysqli_query($conexion,$consulta2);

			if(!empty($resultado2)){
				while($row = $resultado2->fetch_array()){
					$Menor = 1;
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
		<label id="valMontoMenor" for="ValMontoMenor"></label><br>

		<label for="Fecha de vencimiento">Fecha de vencimiento: </label>
		<label id="valFechaVencimiento" for="ValFechaVencimiento"></label><br>

		<label for="Plan">Plan: </label>
		<label for="ValPlan"><?php echo $Plan;?></label><br>

		<label for="Cuota">Cuota: </label>
		<label id="valCuota" for="ValCuota"></label><br>

		<label for="Monto">Monto: </label>
		<label id="valMonto" for="ValMonto"></label><br>

		<button onclick="location.href='ClienteGeneraCuponDePago.php?cliente=<?php echo $cliente?>'"> Volver </button>
		<button> Imprimir </button>

		<script>
			function cantidadDiasMes(i){
				var toReturn = 0
				if(i==0 || i==2 || i==4 || i==6 || i==7 || i==9 || i==11){
					toReturn = 31
				}
				else{
					if(i==3 || i==5 || i==8 || i==10){
						toReturn = 30
					}
					else{
						const year = new Date()
						 if ((0 == year % 4) && (0 != year % 100) || (0 == year % 400)) {
					        toReturn = 29
					    } else {
					        toReturn = 28
					    }
					}
				}
				return toReturn;
			}

			function getMes(i){
				if(i==0)
					return "Enero"
				if(i==1)
					return "Febrero"
				if(i==2)
					return "Marzo"
				if(i==3)
					return "Abril"
				if(i==4)
					return "Mayo"
				if(i==5)
					return "Junio"
				if(i==6)
					return "Julio"
				if(i==7)
					return "Agosto"
				if(i==8)
					return "Septiembre"
				if(i==9)
					return "Octubre"
				if(i==10)
					return "Noviembre"
				if(i==11)
					return "Diciembre"
			}

			function getSemestre(i){
				if(i==12)
					return "1er Semestre"
				if(i==13)
					return "2do Semestre"
			}

			function valorPlan(edad, plan){
				var toReturn =  0
				if(plan === "A"){
					if(edad < 25)
						toReturn = 8500
					else
						if(edad < 41)
							toReturn = 10000
						else
							if(edad < 61)
								toReturn = 15000
							else
								toReturn = 25000
				}
				else{
					if(edad < 25)
						toReturn = 7000
					else
						if(edad < 41)
							toReturn = 8500
						else
							if(edad < 61)
								toReturn = 11000
							else
								toReturn = 0
				}
				return toReturn
			}

			function edad(edad){
				var toReturn
				const arregloFechaNacimiento = edad.split("-")
				const currentDate = new Date()

				var currentDay = currentDate.getDate()
				var currentMonth = currentDate.getMonth() + 1 
				var currentYear = currentDate.getFullYear()

				var diaNacimiento = parseInt(arregloFechaNacimiento[2])
				var mesNacimiento = parseInt(arregloFechaNacimiento[1])
				var anioNacimiento = parseInt(arregloFechaNacimiento[0])

				toReturn = currentYear - anioNacimiento
				if(mesNacimiento > currentMonth)
					toReturn--
				else{
					if((mesNacimiento == currentMonth) && (diaNacimiento > currentDay)){
						toReturn--
					}
				}

				return toReturn
			}
			
			const currentDate = new Date()
			var currentDay = currentDate.getDate()
			var currentMonth = currentDate.getMonth()
			var currentYear = currentDate.getFullYear()
			const fechaVencimiento = new Date()
			var cuota

			//0 no tiene menor asociado, 1 tiene menor asociado
			var fechaNacimiento = <?php echo json_encode($FechaNacimiento, JSON_HEX_TAG);?>;
			
			var edad = edad(fechaNacimiento)

			//0 no tiene menor asociado, 1 tiene menor asociado
			var plan = <?php echo json_encode($Plan, JSON_HEX_TAG);?>;

			//0 no tiene menor asociado, 1 tiene menor asociado
			var menorAsociado = <?php echo json_encode($Menor, JSON_HEX_TAG);?>;

			//0 a 11 son los meses de opcion de pago mensual, 12 y 13 semestral y 14 anual
			var option = <?php echo json_encode($option, JSON_HEX_TAG);?>;

			var monto = valorPlan(edad,plan)
			var montoMenor = 0
			if(menorAsociado == 1){
				montoMenor = valorPlan(17,plan)
			}

			if(option<=11){
				cuota = "Mensual - "+getMes(option)+" "+currentYear

				//Pago atrasado
				if(currentDay>10 || currentMonth>option){
					
					if(currentMonth == 11){
						fechaVencimiento.setMonth(0)
						fechaVencimiento.setFullYear(currentYear+1)
					}
					else{
						fechaVencimiento.setMonth(currentMonth+1)
					}
					
					var diasDeRetraso = 0
					
					var i = option
					while(i<currentMonth){
						diasDeRetraso = diasDeRetraso + cantidadDiasMes(i)
						i++
					}
					
					if(currentDay > 10){
						diasDeRetraso = diasDeRetraso + (currentDay - 10)
					}

					var recargo = 1 + diasDeRetraso/20
					
					monto = monto*recargo
					montoMenor = montoMenor*recargo
					
				}
				//Pago en tiempo
				else{
					fechaVencimiento.setDate(10)
				}
			}
			else{
				if(option==12 || option==13){
					cuota = "Semestral - "+getSemestre(option)+" "+currentYear
					fechaVencimiento.setDate(10)
					monto = monto*6*0.85
					montoMenor = montoMenor*6*0.85
				}
				//Option = 14
				else{
					cuota = "Anual - "+currentYear
					fechaVencimiento.setDate(10)
					monto = monto*12*0.65
					montoMenor = montoMenor*12*0.65
				}
			}

			monto = monto + montoMenor
			
			document.getElementById("valMontoMenor").innerHTML = "$"+montoMenor
			document.getElementById("valFechaVencimiento").innerHTML = fechaVencimiento.toDateString()
			document.getElementById("valCuota").innerHTML = cuota
			document.getElementById("valMonto").innerHTML = "$"+monto
		</script>
	</body>
</html>