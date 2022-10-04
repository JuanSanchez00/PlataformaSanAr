<html>
	<head>
		<title>Modificar Datos Administrador</title>
	</head>
	<body>
		<h1>Modificar datos basicos</h1>

       	<form>
       		<p>Los campos marcados con * son obligatorios</p>

       		<label for="Nombre">* Nombre: </label><br>
			<input type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido">* Apellido: </label><br>
			<input type="text" id="Apellido" name="Apellido" required><br>

			<label for="FechaDeNacimiento">* Fecha de Nacimiento: </label><br>
			<input type="date" id="FechaDeNacimiento" name="FechaDeNacimiento" required><br>

			<label for="DNI">* DNI: </label><br>
			<input type="number" id="DNI" name="DNI" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Email">* Email: </label><br>
			<input type="text" id="Email" name="Email" required><br>

			<label for="Provincia">* Provincia: </label><br>
			<select>
				<option value="BuenosAires" selected>Buenos Aires</option>
 				<option value="Mendoza">Mendoza</option>
			</select id="Provincia" name="Provincia" required><br>

			<label for="Localidad">* Localidad: </label><br>
			<select>
				<option value="BahiaBlanca" selected>Bahía Blanca</option>
 				<option value="Mendoza">Mendoza</option>
			</select id="Localidad" name="Localidad" required><br>

			<label for="Calle">* Calle: </label><br>
			<input type="text" id="Calle" name="Calle" required><br>

			<label for="DeptoCasa">Depto o casa nº: </label><br>
			<input type="text" id="DeptoCasa" name="DeptoCasa" ><br>

			<label for="CP">* CP: </label><br>
			<input type="number" id="CP" name="CP" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Telefono">* Teléfono: </label><br>
			<input type="number" id="Telefono" name="Telefono" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Rol">* Rol: </label><br>
			<select>
				<option value="Rol1" selected>Rol1</option>
 				<option value="Rol2">Rol2</option>
			</select id="Rol" name="Rol" required><br>

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

			<br><button onclick="location.href='PantallaEmpleado.html'"> Cancelar </button> <input type="submit" value="Confirmar">

       	</form>



    </body>



</html>