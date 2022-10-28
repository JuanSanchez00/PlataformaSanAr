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
					$admin = $_GET['admin'];
                    include("mostrarSolicitudesDesdeAdministrador.php")
				?>
  			</tbody>
		</table>
    <br>
    <button onclick="location.href='PantallaAdministrador.php?admin=<?php echo $admin?>'"> Volver </button> 
	<body>

</html>