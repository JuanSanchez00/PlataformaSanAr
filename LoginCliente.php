<html>
	<head>
		<title>login cliente</title>
	</head>
	<body>
		<p>SanAr<p/>
		<form action="logCliente.php" method="POST">
			<p>Ingrese sus datos: </p>
			<p>DNI:</p>
			<input type="text" name = "nombreCliente" required>
			<p>Contraseña:</p>
			<input type="text" name = "passCliente" required>
			<p> </p>
			<button>Ingresar</button>
		</form>
		<p>¿No tiene un usuario?<p/>
		<button onclick="location.href='ClienteRegistraACliente.php'">Registrarse</button>
		<button onclick="location.href='index.html'">Cancelar</button>
	</body>
</html>