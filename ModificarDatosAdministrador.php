<html>
	<head>
		<title>Modificar Datos Administrador</title>
	</head>
	<body>
		<h1>Modificar datos basicos</h1>

		<?php
			require 'conexion.php';
			session_start();
			$admin = $_GET['admin'];
			$consulta = "SELECT nombre, apellido, fecha_nac, DNI, email, provincia, localidad, calle, depto, CP, tel, sucursal FROM Administrador 
			WHERE DNI = ".$admin.";";

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
					$Sucursal = $row['sucursal'];
				}
			}	
		?>

       	<form action= "modificarAdminDesdeAdmin.php<?php echo "?admin=$admin"?>" method="POST">
       		<p>Los campos marcados con (*) son obligatorios</p>

       		<label for="Nombre"> Nombre(*): </label><br>
			<input type="text" id="Nombre" name="Nombre" value = <?php echo $Nombre;?> required><br>

			<label for="Apellido"> Apellido(*): </label><br>
			<input type="text" id="Apellido" name="Apellido" value = <?php echo $Apellido;?> required><br>

			<label for="FechaDeNacimiento"> Fecha de Nacimiento(*): </label><br>
			<input type="date" id="FechaDeNacimiento" name="FechaDeNacimiento" value = <?php echo $Fecha;?> required><br>

			<label for="DNI"> DNI(*): </label><br>
			<input type="number" id="DNI" name="DNI" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;"  value = <?php echo $Dni;?> required disable><br>

			<label for="Email"> Email(*): </label><br>
			<input type="text" id="Email" name="Email" value = <?php echo $Email;?> required><br>

			<label for="Provincia"> Provincia(*): </label><br>
			<select id="Provincia" name="Provincia">
				<option value="BuenosAires" selected>Buenos Aires</option>
 				<option value="Mendoza">Mendoza</option>
			</select required><br>

			<label for="Localidad"> Localidad(*): </label><br>
			<select id="Localidad" name="Localidad">
				<option value="BahiaBlanca" selected>Bah??a Blanca</option>
 				<option value="Mendoza">Mendoza</option>
			</select required><br>

			<label for="Calle"> Calle(*): </label><br>
			<input type="text" id="Calle" name="Calle" value = <?php echo $Calle;?> required><br>

			<label for="DeptoCasa">Depto o casa n??: </label><br>
			<input type="text" id="DeptoCasa" name="DeptoCasa" value= <?php echo $Depto;?> ><br>

			<label for="CP"> CP(*): </label><br>
			<input type="number" id="CP" name="CP" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;"  value = <?php echo $Cp;?> required><br>

			<label for="Telefono"> Tel??fono(*): </label><br>
			<input type="number" id="Telefono" name="Telefono" min="0" onkeypress="return SoloEnteroPositivo(event);"ondrop="return false;" onpaste="return false;" value = <?php echo $Tel;?> required><br>

			<label for="Rol"> Rol(*): </label><br>
			<select id="Rol" name="Rol" required>
                    <option value="" selected disabled>Roles</option>
                    <option value="Jefe de Area" >Jefe de Area</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Administrador">Administrador</option>
                </select ><br>


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

			<br><input type="submit" value="Confirmar">

       	</form>	

       	<button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 

    </body>

</html>