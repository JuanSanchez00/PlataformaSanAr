<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<p>SanAr<p/>
		<p>Ingrese sus datos para registrarse: </p>	

		<form action="ClienteSeRegistra.php" method="POST">
			<label for="Nombre"> Nombre: </label>
			<input type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido"> Apellido: </label>
			<input type="text" id="Apellido" name="Apellido" required><br>

			<label for="Fecha de nacimiento"> Fecha de nacimiento: </label>
			<input type="date" id="Fecha de nacimiento" name="Fecha" required><br>

			<label for="DNI"> DNI: </label>
			<input type="number" id="DNI" name="DNI" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Contraseña"> Contraseña: </label>
			<input type="password" id="Contraseña" name="Contraseña" required><br>

			<label for="Confirme su contraseña"> Confirme su contraseña: </label>
			<input type="password" id="Confirme su contraseña" name="Confirme su contraseña" required><br>

			<label for="E-Mail"> E-Mail: </label>
			<input type="text" id="E-Mail" name="E-Mail" required><br>

			<label for="Provincia"> Provincia: </label>
			<input type="text" id="Provincia" name="Provincia" required><br>

			<label for="Localidad"> Localidad: </label>
			<input type="text" id="Localidad" name="Localidad" required><br>

			<label for="Calle"> Calle: </label>
			<input type="text" id="Calle" name="Calle" required>
			<label for="Numero"> Numero: </label>
			<input type="number" id="Numero" name="Numero" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required>
			<br>

			<label for="DptoCasa"> Dpto o casa nro (opcional): </label>
			<input type="text" id="DptoCasa" name="DptoCasa"><br>

			<label for="CP"> CP: </label>
			<input type="number" id="CP" name="CP" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Telefono"> Telefono: </label>
			<input type="number" id="Telefono" name="Telefono" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required>
			<label for="Codigo"> Codigo de Area: </label>
			<input type="number" id="Codigo" name="Codigo" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Plan"> Plan: </label>
			<select id="Plan" name="Plan">
				<?php
					include("listadoPlanes.php")
				?>
			</select  required><br>

			
			<br><input type="submit" value="Confirmar">

		</form>

		<br><button onclick="location.href='LoginCliente.php'"> Cancelar </button>

		<script type="text/javascript">
			    function SoloEnteroPositivo(e) {
			        var theEvent = e || window.event;
			        var key = theEvent.keyCode || theEvent.which;
			        key = String.fromCharCode(key);
			        var regex = /[^,.;]+$/;
			        if (!regex.test(key)) {
			            theEvent.returnValue = false;
			            if (theEvent.preventDefault) {
			                theEvent.preventDefault();
			            }
			        }
			    }
			</script>

	</body>
</html>