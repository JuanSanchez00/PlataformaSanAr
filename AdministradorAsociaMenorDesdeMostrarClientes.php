<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<p>SanAr<p/>
		<p>Ingrese los datos del menor: </p>	
		<?php 
			$cliente=$_GET["cliente"];
			$admin=$_GET["admin"];
		?>
		<p>Los campos con un (*) son obligatorios.</p>

		<form action="administradorRegistraMenor.php<?php echo"?admin=$admin&cliente=$cliente"?>" method="POST">
			<label for="Nombre"> Nombre(*): </label>
			<input type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido"> Apellido(*): </label>
			<input type="text" id="Apellido" name="Apellido" required><br>

			<label for="Fecha de nacimiento"> Fecha de nacimiento(*): </label>
			<input type="date" id="FechaNaci" name="Fecha"  onchange="return validarFecha(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="DNI"> DNI(*): </label>
			<input type="number" id="DNI" name="DNI" min="1" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Relacion"> Relacion con el asociado(*): </label>
			<select id="Relacion" name="Relacion">
				<option value="Hijo"> Hijo/a </option>
				<option value="Hijo"> Nieto/a </option>
				<option value="Hijo"> Sobrino/a </option>   
			</select  required><br>

			<button for="Confirmar"> Confirmar </button><br>

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

					if(dias > 6570){
						alert("El cliente ingresado es mayor de edad");
						document.getElementById('FechaNaci').value = "";
					}
    			}

			</script>


		</form>

		<button onclick="location.href='listarClientes.php?admin=<?php echo $admin?>'"> Cancelar </button>
	</body>
</html>