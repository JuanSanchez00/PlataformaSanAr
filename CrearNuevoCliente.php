<html>
	<head>
		<title>Crear nuevo Cliente</title>
	</head>
	<?php
        $admin = $_GET['admin'];
    ?>
	<body>
		<h1>Ingrese los datos del nuevo cliente</h1>

		<p>Los campos marcados con (*) son obligatorios</p>

        <form action="registroCliente.php<?php echo "?admin=$admin"?>" method="POST">
			<label for="Nombre"> Nombre(*): </label>
			<input type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido"> Apellido(*): </label>
			<input type="text" id="Apellido" name="Apellido" required><br>

			<label for="Fecha de nacimiento"> Fecha de nacimiento(*): </label>
			<input type="date" id="FechaNaci" name="Fecha" onchange="return validarFecha(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="DNI"> DNI(*): </label>
			<input type="number" id="DNI" name="DNI" min = "0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Contraseña"> Contraseña(*): </label>
            <input type="password" id="Contraseña" name="Contraseña" pattern="(?=.*\d)(?=.*[A-Z]).{1,}" title="Debe contener una mayuscula y un numero" required><br>

			<label for="Confirme su contraseña"> Confirme su contraseña(*): </label>
			<input type="password" id="Confirme su contraseña" name="Confirme su contraseña" onchange="return validadContraseña(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="E-Mail"> E-Mail(*): </label>
			<input type="text" id="E-Mail" name="E-Mail" required><br>

			<label for="Provincia"> Provincia(*): </label>
			<select name="Provincia" required>
				<option value="BuenosAires" selected="">Buenos Aires</option>
 				<option value="Mendoza">Mendoza</option>
			</select id="Provincia" name="Provincia" ><br>

			<label for="Localidad"> Localidad(*): </label>
			<select name="Localidad" required>
				<option value="BahiaBlanca">Bahía Blanca</option>
 				<option value="Mendoza">Mendoza</option>
			</select id="Localidad" name="Localidad" ><br>

			<label for="Calle"> Calle(*): </label>
			<input type="text" id="Calle" name="Calle" required>
			<label for="Numero"> Numero: </label>
			<input type="number" id="Numero" name="Numero" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="DptoCasa"> Dpto o casa nro: </label>
			<input type="text" id="DptoCasa" name="DptoCasa"><br>

			<label for="CP"> CP(*): </label>
			<input type="number" id="CP" name="CP" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Telefono"> Telefono(*): </label>
			<input type="number" id="Telefono" name="Telefono"  onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required>
			<label for="Codigo"> Codigo de Area: </label>
			<input type="number" id="Codigo" name="Codigo"  onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Plan"> Plan(*): </label>
			<select id="Plan" name="Plan">
				<?php
					include("listadoPlanes.php")
				?>
			</select  required><br>

			<br><button> Aceptar </button><br>
		</form>

		<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

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

			    function validarFecha(){
			    	fecha = document.getElementById('FechaNaci').value; 	
			    	fechaParseada = fecha.split("-");
			    	FechaInicio = new Date(fechaParseada[0],fechaParseada[1],fechaParseada[2]-31);
			    	FechaActual = new Date();
			    
    				var dif = FechaActual - FechaInicio;
 					var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

 					if(dias < 6570){
 						alert("El cliente ingresado no es mayor de edad");
 						document.getElementById('FechaNaci').value = "";
 					}
			    }
				
				function validadContraseña(){
					contraseña = document.getElementById('Contraseña').value;
					contraseñaAConfirmar = document.getElementById('Confirme su contraseña').value;

					if(contraseña!=contraseñaAConfirmar){
						alert("Las contraseñas ingresadas no coinciden");
						document.getElementById('Confirme su contraseña').value = "";
					}

				}

			</script>

			
	</body>
</html>