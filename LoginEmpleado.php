<html>
	<head>
		<title>login empleado</title>
	</head>
	<body>
		<p>SanAr<p/>
		<form action="logEmpleado.php" method="POST">
			<p>Ingrese sus datos: </p>
			<p>Nombre de usuario (DNI):</p>
			<input type="text" name = "nombreEmpleado" required>
			<p>Contraseña:</p>
			<input type="password" name = "passEmpleado" required>	
			<p></p>
			<button>Ingresar</button>
		</form>
		<button onclick="location.href='index.html'">Cancelar</button>
	</body>
</html>