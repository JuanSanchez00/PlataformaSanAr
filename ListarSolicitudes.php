<html>
    <head>
        <title>Mis Solicitudes</title>
    </head>

    <body>
        <h1>Mis Solicitudes</h1>

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
                    include("mostrarSolicitudes.php")
                ?>
              </tbody>
        </table>
        <button onclick="location.href='PantallaCliente.php<?php echo"?cliente=$cliente"?>'"> Volver </button>		

    <body>

</html>