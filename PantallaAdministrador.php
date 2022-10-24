<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<?php
			require 'conexion.php';
			session_start();
			$admin=$_GET["admin"];
		?>
		<h1>SanAr</h1>
		<h2>Usuario Administrador</h2>

		<button onclick="location.href='index.html'"> Inicio </button>
		
		<form method="POST">
			<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
			    <option value="" selected disabled>Operaciones</option>
			    <option value= "ModificarDatosAdministrador.php<?php echo"?admin=$admin"?>">Modificar Mis Datos</option>
			    <option value="CrearNuevoPlan.php<?php echo"?admin=$admin"?>">Crear nuevo plan</option>
			    <option value="listarClientes.php<?php echo"?admin=$admin"?>">Mostrar Clientes</option>
			    <option value="listarEmpleados.php<?php echo"?admin=$admin"?>">Listar Empleados</option>
				<option value="CrearNuevoEmpleado.php<?php echo"?admin=$admin"?>">Crear nuevo empleado</option>
				<option value="CrearNuevoCliente.php<?php echo"?admin=$admin"?>">Crear nuevo cliente</option>
				<option value="listarPlanes.php<?php echo"?admin=$admin"?>">Listar Planes</option>
			</select>	
		</form>

		<button onclick="location.href='LoginAdministrador.php'"> Cerrar Sesión </button>

			
	</body>
</html>
