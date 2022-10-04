<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<?php
			require 'conexion.php';
			session_start();
		?>
		<h1>SanAr</h1>
		<h2>Usuario Administrador <?php $admin=$_GET["admin"]; echo $admin; ?> </h2>

		<button onclick="location.href='index.html'"> Inicio </button>
		
		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Operaciones</option>
		    <option value="CrearNuevoPlan.html">Crear nuevo plan</option>
		    <option value="listarClientes.php">Listar Clientes</option>
		    <option value="listarEmpleados.php">Listar Empleados</option>
			<option value="CrearNuevoEmpleado.php">Crear nuevo empleado</option>
			<option value="CrearNuevoCliente.php">Crear nuevo cliente</option>
		</select>	

		<form action="ModificarDatosAdministrador.php" method="POST">
			<button name = "admin" value = <?php echo $admin;?>> Modificar mis datos</button>
		</form>

		<button onclick="location.href='LoginAdministrador.php'"> Cerrar Sesión </button>

			
	</body>
</html>