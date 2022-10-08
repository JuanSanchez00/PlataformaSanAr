<html>
	<head>
		<title>login empleado</title>
	</head>
	<body>
		<p>SanAr<p/>
		<form action="logEmpleado.php" method="POST">
			<p>Ingrese sus datos: </p>
			<p>DNI:</p>
			<input type="number" id="DNI" name="nombreEmpleado" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>
			<p>Contraseña:</p>
			<input type="password" name = "passEmpleado" required>	
			<p></p>
			<button>Ingresar</button>
		</form>
		<button onclick="location.href='index.html'">Cancelar</button>
	</body>
</html>