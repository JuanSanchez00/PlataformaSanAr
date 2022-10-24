<?php
	require 'conexion.php';
	session_start();
	$admin = $_GET['admin'];
	$cliente = $_GET['cliente'];
	$consulta = "SELECT nombre, apellido, fecha_nac, DNI, email, provincia, localidad, calle, depto, CP, tel, plan FROM Cliente WHERE DNI = ".$cliente.";";
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

       	<form action= "modificarClienteDesdeAdmin.php<?php echo "?admin=$admin"?>" method="POST">
       		<p>Los campos marcados con (*) son obligatorios</p>

       		<label for="Nombre"> Nombre(*): </label><br>
			<input type="text" id="Nombre" name="Nombre" value = <?php echo $Nombre;?> required><br>

			<label for="Apellido"> Apellido(*): </label><br>
			<input type="text" id="Apellido" name="Apellido" value = <?php echo $Apellido;?>  required><br>

			<label for="FechaDeNacimiento"> Fecha de Nacimiento(*): </label><br>
			<input type="date" id="FechaNaci" name="FechaDeNacimiento" onchange="return validarFecha(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Fecha;?> required><br>

			<label for="DNI"> DNI(*): </label><br>
			<input type="number" id="DNI" name="DNI" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Dni;?> required disable><br>

			<label for="Email"> Email(*): </label><br>
			<input type="text" id="Email" name="Email" value = <?php echo $Email;?> required><br>

			<label for="Provincia"> Provincia(*): </label><br>
			<select id="Provincia" name="Provincia">
				<option selected> <?php echo $Provincia ?></option>
				<option value="BuenosAires" >Buenos Aires</option>
 				<option value="Mendoza">Mendoza</option>
			</select required><br>

			<label for="Localidad"> Localidad(*): </label><br>
			<select id="Localidad" name="Localidad">
				<option selected> <?php echo $Localidad ?></option>
				<option value="BahiaBlanca" >Bahía Blanca</option>
 				<option value="Mendoza">Mendoza</option>
			</select required><br>

			<label for="Calle"> Calle(*): </label><br>
			<input type="text" id="Calle" name="Calle" value = <?php echo $Calle;?> required><br>

			<label for="DeptoCasa">Depto o casa nº: </label><br>
			<input type="text" id="DeptoCasa" name="DeptoCasa" value= <?php echo $Depto;?> ><br>

			<label for="CP"> CP(*): </label><br>
			<input type="number" id="CP" name="CP" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;"  value = <?php echo $Cp;?> required><br>

			<label for="Telefono"> Teléfono(*): </label><br>
			<input type="number" id="Telefono" name="Telefono" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Tel;?> required><br>

			<label for="Plan"> Plan(*): </label><br>
			<select  id="Plan" name="Plan" value = <?php echo $Plan;?>>
				<option> <?php echo $Plan;?> </option>
				<?php
					include("listadoPlanes.php")
				?>
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

			<br><button name = "DNIViejo" value = '<?php echo $Dni ?>'> Confirmar </button> 

       	</form>

       	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

    </body>
    <script type="text/javascript">
		
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

	</script>

</html>