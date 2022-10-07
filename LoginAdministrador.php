<html>
	<head>
		<title>login administrador</title>
		<form method = "post" action="conexion.php"> </form>
	</head>
	<body>
		<p>SanAr<p/>
		<form action="logAdmin.php" method="POST">
			<p>Ingrese sus datos: </p>
			<p>DNI:</p>
			<input type="text" name = "nombreAdmin" required> 
			<p>Contraseña:</p>
			<input type="password" name = "passAdmin" required>
			<p></p>
			<button> Ingresar </button>
		</form>
		<button onclick="location.href='index.html'">Cancelar</button>
	</body>
</html>