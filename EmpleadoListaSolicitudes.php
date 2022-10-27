<html>
	<head>
		<title>Listado Solicitudes</title>
	</head>

	<body>
		<center>Solicitudes</center>
		<table>
	  		<tbody>
    			<tr>
      				<th>ID</th>
      				<th>Tipo</th>
      				<th>Apellido</th>
      				<th>Nombre</th>
      				<th>DNI</th>
      				<th>Mas Info</th>
      				<th>Estado</th>
    			</tr>
    			<?php
					$empleado = $_GET['empleado'];
          include("mostrarSolicitudesDesdeEmpleado.php")
				?>
  			</tbody>
		</table>
		
	<body>

</html>