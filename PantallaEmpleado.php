<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<h1>SanAr</h1>
		<h2>Usuario Empleado </h2>

		<button onclick="location.href='index.html'"> Inicio </button>

		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Operaciones</option>
		     <option value="CrearNuevoCliente.php">Crear Usuario Cliente</option>
		    <option value="ModificarDatosEmpleado.html">Modificar mis datos</option>
		    <option value="listarClientes.php">Listar Clientes</option>
		    
		</select>	

		<button onclick="location.href='LoginEmpleado.php'"> Cerrar Sesión </button>

			
	</body>
</html>