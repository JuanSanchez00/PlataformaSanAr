<html>
	<head>
		<title>Listado Clientes</title>
	</head>

	<body>
		<center>Clientes</center>
		<table>
	  		<tbody>
    			<tr>
      				<th>Nombre</th>
      				<th>Apellido</th>
      				<th>Fecha de Nacimiento</th>
      				<th>DNI</th>
      				<th>E-mail</th>
      				<th>Provincia</th>
      				<th>Localidad</th>
      				<th>Calle</th>
      				<th>Depto / Casa nº</th>
      				<th>CP</th>
      				<th>Telefono</th>
      				<th>Menor a cargo</th>
      				<th>Plan</th>
      				<th>Operaciones</th>
    			</tr>
    			<?php
					$empleado = $_GET['empleado'];
					include("EmpleadoMuestraClientes.php")
				?>
  			</tbody>
		</table>
		<button onclick="location.href='PantallaEmpleado.php<?php echo"?empleado=$empleado"?>'"> Volver </button>	
		
	<body>

</html>