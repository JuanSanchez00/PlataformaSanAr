<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<h1>SanAr</h1>
		<h2>Usuario Empleado </h2>
		<?php $empleado=$_GET["empleado"];?>

		<button onclick="location.href='index.html'"> Inicio </button>

		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Operaciones</option>
		     <option value="EmpleadoCreaNuevoCliente.php<?php echo"?empleado=$empleado"?>">Crear Usuario Cliente</option>
		    <option value="EmpleadoModificaSusDatos.php<?php echo"?empleado=$empleado"?>">Modificar mis datos</option>
		    <option value="EmpleadoListaClientes.php<?php echo"?empleado=$empleado"?>">Listar Clientes</option>
		    
		</select>	

		<button onclick="location.href='LoginEmpleado.php'"> Cerrar Sesión </button>

			
	</body>
</html>