
<?php
	require 'conexion.php';
	session_start();
	$consulta = "SELECT nombre, apellido, fecha_nac, DNI, email, provincia, localidad, calle, depto, CP, tel, plan FROM Cliente WHERE DNI = ".$_REQUEST['Clientes'].";";
	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado){
		while ($row = $resultado->fetch_array()) {
			$Nombre = $row['nombre'];
			$Apellido = $row['apellido'];
			$Fecha = $row['fecha_nac'];
			$Dni = $row['DNI'];
			$Email = $row['email'];
			$Provincia = $row['provincia'];
			$Localidad = $row['localidad'];
			$Calle = $row['calle'];
			$Depto = $row['depto'];
			$Cp = $row['CP'];
			$Tel = $row['tel'];
			$Plan = $row['plan'];
		}
	}	

	//echo $Nombre, $Apellido, $Fecha, $Dni, $Email, $Provincia, $Localidad, $Calle, $Depto, $Cp, $Tel, $Plan;
	
?>


<html>
	<head>
		<title>Modificar Datos Cliente</title>
	</head>
	<body>
		<h1>Modificar datos basicos</h1>

       	<form action= "modificarClienteDesdeAdmin.php" method="POST">
       		<p>Los campos marcados con * son obligatorios</p>

       		<label for="Nombre">* Nombre: </label><br>
			<input type="text" id="Nombre" name="Nombre" value = <?php echo $Nombre;?> required><br>

			<label for="Apellido">* Apellido: </label><br>
			<input type="text" id="Apellido" name="Apellido" value = <?php echo $Apellido;?>  required><br>

			<label for="FechaDeNacimiento">* Fecha de Nacimiento: </label><br>
			<input type="date" id="FechaDeNacimiento" name="FechaDeNacimiento" value = <?php echo $Fecha;?> required><br>

			<label for="DNI">* DNI: </label><br>
			<input type="number" id="DNI" name="DNI" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Dni;?> required disable><br>

			<label for="Contraseña">* Contraseña: </label><br>
			<input type="text" id="Contraseña" name="Contraseña" required><br>

			<label for="Email">* Email: </label><br>
			<input type="text" id="Email" name="Email" value = <?php echo $Email;?> required><br>

			<label for="Provincia">* Provincia: </label><br>
			<select id="Provincia" name="Provincia">
				<option value="BuenosAires" selected>Buenos Aires</option>
 				<option value="Mendoza">Mendoza</option>
			</select required><br>

			<label for="Localidad">* Localidad: </label><br>
			<select id="Localidad" name="Localidad">
				<option value="BahiaBlanca" selected>Bahía Blanca</option>
 				<option value="Mendoza">Mendoza</option>
			</select required><br>

			<label for="Calle">* Calle: </label><br>
			<input type="text" id="Calle" name="Calle" value = <?php echo $Calle;?> required><br>

			<label for="DeptoCasa">Depto o casa nº: </label><br>
			<input type="text" id="DeptoCasa" name="DeptoCasa" value= <?php echo $Depto;?> ><br>

			<label for="CP">* CP: </label><br>
			<input type="number" id="CP" name="CP" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;"  value = <?php echo $Cp;?> required><br>

			<label for="Telefono">* Teléfono: </label><br>
			<input type="number" id="Telefono" name="Telefono" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Tel;?> required><br>

			<label for="Plan">* Plan: </label><br>
			<select  id="Plan" name="Plan">
				<?php
<<<<<<< HEAD
					include("listadoPlanes.php")
				?>
=======
                    include("listadoPlanes.php")
                ?>
>>>>>>> c2166dd1c6ff5ae8043f87e0ebaa63167f08a738
			</select required><br>

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

			<br><button onclick="location.href='PantallaAdministrador.html'"> Cancelar </button> <input type="submit" value="Confirmar">

       	</form>



    </body>



</html>