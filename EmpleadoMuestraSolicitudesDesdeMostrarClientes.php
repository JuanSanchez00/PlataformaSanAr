<html>
    <head>
        <title>Solicitudes de cliente</title>
    </head>

    <body>
        <h1>Solicitudes de cliente</h1>

        <table>
              <tbody>
                <tr>
                      <th>N°</th>
                      <th>Tipo</th>
                      <th>Mas info</th>
                      <th>Estado</th>
                </tr>
                <?php
                    $cliente = $_GET['cliente'];
                    $empleado = $_GET['empleado'];
                    include("EmpleadoListaSolicitudesDesdeMostrarClientes.php")
                ?>
              </tbody>
        </table>
        <button onclick="location.href='EmpleadoListaClientes.php<?php echo"?empleado=$empleado"?>'"> Volver </button>		

    <body>

</html>