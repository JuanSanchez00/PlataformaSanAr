<html>
	<head>
		<title>Listado Clientes</title>
	</head>

	<body>
		<center>Empleados</center>
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
      				<th>Rol</th>
      				<th>Sucursal</th>
      				<th>Operaciones</th>
    			</tr>
    			<?php
					$admin = $_GET['admin'];
					include("mostrarEmpleados.php")
				?>
  			</tbody>
		</table>

		<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
		
	<body>

</html>