<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<p>SanAr<p/>
		<p>Ingrese sus datos para registrarse: </p>	
		<?php $cliente=$_GET["cliente"];?>

		<form action="registroMenor.php" method="POST">
			<label for="Nombre"> Nombre: </label>
			<input type="text" id="Nombre" name="Nombre" required><br>

			<label for="Apellido"> Apellido: </label>
			<input type="text" id="Apellido" name="Apellido" required><br>

			<label for="Fecha de nacimiento"> Fecha de nacimiento: </label>
			<input type="date" id="Fecha de nacimiento" name="Fecha" value="2000-01-01"><br>

			<label for="DNI"> DNI: </label>
			<input type="number" id="DNI" name="DNI" min="1" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" required><br>

			<label for="Relacion"> Relacion con el asociado: </label>
			<select id="Relacion" name="Relacion">
				<option value="Hijo"> Hijo/a </option>
				<option value="Hijo"> Nieto/a </option>
				<option value="Hijo"> Sobrino/a </option>   
			</select  required><br>

			<button for="Confirmar" name = "Cliente" value = <?php echo $cliente;?>> Confirmar </button><br>

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


		</form>

		<button onclick="location.href='PantallaCliente.php?cliente=<?php echo $cliente?>'"> Cancelar </button>
	</body>
</html>