<html>
	<head>
		<title>SanAr</title>
	</head>
	<body>
		<h1>SanAr</h1>
		<h2>Usuario Cliente </h2>
		<?php $cliente=$_GET["cliente"];?>

		<button onclick="location.href='index.html'"> Inicio </button>

		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		    <option value="" selected disabled>Operaciones</option>
		    <option value="ModificarDatosCliente.html">Modificar datos Cliente</option>
		    <option value="AsociarMenor.php<?php echo"?cliente=$cliente"?>">Asociar menor a obra social</option>
		</select>	

		<button onclick="location.href='LoginCliente.php'"> Cerrar Sesión </button>

			
	</body>
</html>