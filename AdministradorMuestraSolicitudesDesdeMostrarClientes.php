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
                    $admin = $_GET['admin'];
                    include("AdministradorListaSolicitudesDesdeMostrarClientes.php")
                ?>
              </tbody>
        </table>
        <button onclick="location.href='listarClientes.php<?php echo"?admin=$admin"?>'"> Volver </button>		

    <body>

</html>