<html>
	<head>
		<title>login cliente</title>
	</head>
	<body>
		<p>SanAr<p/>
		<form action="logCliente.php" method="POST">
			<p>Ingrese sus datos: </p>
			Los campos con un (*) son obligatorios. 
			<p>DNI(*):</p>
			<input type="number" id="DNI" name="nombreCliente" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>
			<p>Contraseña(*):</p>
			<input type="password" name = "passCliente" required>
			<p> </p>
			<button>Ingresar</button>
		</form>
		<p>¿No tiene un usuario?<p/>
		<button onclick="location.href='ClienteRegistraACliente.php'">Registrarse</button>
		<button onclick="location.href='index.html'">Cancelar</button>
	</body>
</html>