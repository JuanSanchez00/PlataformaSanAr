<html>
	<head>
		<title>login cliente</title>
	</head>
	<body>
		<p>SanAr<p/>
		<form action="logCliente.php" method="POST">
			<p>Ingrese sus datos: </p>
			<p>Nombre de usuario:</p>
			<input type="text" name = "nombreCliente">
			<p>Contraseña:</p>
			<input type="text" name = "passCliente">
			<p> </p>
			<button>Ingresar</button>
		</form>
		<p>¿No tiene un usuario?<p/>
		<button onclick="location.href='RegistrarCliente.html'">Registrarse</button>
	</body>
</html>