<html>
	<head>
		<h1>Cupon de Pago - SanAr</h1>
	</head>
	<body>
		<?php
			require 'conexion.php';
			session_start();
			$cliente=$_GET["cliente"];
			$consulta = "SELECT nombre, apellido, DNI, plan FROM Cliente 
			WHERE DNI = ".$cliente.";";

			$resultado = mysqli_query($conexion,$consulta);

			if ($resultado){
				while ($row = $resultado->fetch_array()) {
					$Nombre = $row['nombre'];
					$Apellido = $row['apellido'];
					$Dni = $row['DNI'];
					$Plan = $row['plan'];
				}
			}	
		?>
		<label for="Nombre">Nombre: </label>
		<label for="ValNombre"><?php echo $Nombre;?></label><br>

		<label for="Apellido">Apellido: </label>
		<label for="ValApellido"><?php echo $Apellido;?></label><br>

		<label for="DNI">DNI: </label>
		<label for="ValDni"><?php echo $Dni;?></label><br>

		<label for="Menor a cargo">Menor a cargo: </label><br>
		<label for="Fecha de vencimiento">Fecha de vencimiento: </label><br>

		<label for="Plan">Plan: </label>
		<label for="ValPlan"><?php echo $Plan;?></label><br>
		
		<label for="Cuota">Cuota: </label><br>
		<label for="Monto">Monto: </label><br>


		<button> Imprimir </button>
		<button onclick="location.href='PantallaCliente.php'"> Volver </button>
	</body>
</html>