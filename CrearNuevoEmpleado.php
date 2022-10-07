<html>
	<head>
		<title>Crear nuevo Empleado</title>
	</head>
    <?php
        $admin = $_GET['admin'];
    ?>
	<body>
		<h1>Ingrese los datos del nuevo Empleado</h1>

        <form action="crearUsuarioEmpleado.php<?php echo "?admin=$admin"?>" method="POST">

                <label for="Nombre"> Nombre: </label>
                <input type="text" id="Nombre" name="Nombre" required><br>
    
                <label for="Apellido"> Apellido: </label>
                <input type="text" id="Apellido" name="Apellido" required><br>
    
                <label for="Fecha de nacimiento"> Fecha de nacimiento: </label>
                <input type="date" id="Fecha de nacimiento" name="Fecha"><br>
    
                <label for="DNI"> DNI: </label>
                <input type="number" id="DNI" name="DNI" required><br>
    
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
                <input type="number" id="Numero" name="Numero" required><br>
    
                <label for="DptoCasa"> Dpto o casa nro (opcional): </label>
                <input type="text" id="DptoCasa" name="DptoCasa"><br>
    
                <label for="CP"> CP: </label>
                <input type="number" id="CP" name="CP" required><br>
    
                <label for="Telefono"> Telefono: </label>
                <input type="number" id="Telefono" name="Telefono" required><br>
    
                <label for="Rol"> Rol: </label>
                <select id="Rol" name="Rol" >
                    <option value="" selected disabled>Roles</option>
                    <option value="Jefe de Area" >Jefe de Area</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Administrador">Administrador</option>
                </select required><br>

                <label for="Sucursal"> Sucursal: </label>
                <select id="Sucursal" name="Sucursal" >
                    <option value="" selected disabled>Sucursales</option>
                    <option value="Capital Federal" >Capital Federal</option>
                    <option value="Mar del Plata">Mar del Plata</option>
                    <option value="Cordoba">Cordoba</option>
                </select required><br>

            <br><button> Aceptar </button><br>

		</form>

        <button onclick = "location.href = 'PantallaAdministrador.php<?php echo "?admin=$admin" ?>'"> Cancelar </button> 
			
	</body>
</html>