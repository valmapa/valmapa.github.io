<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación</title>
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
    <div class="container">
      <table>
        <tbody>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
<th>Sexo</th>
<th>Cédula</th>
<th>Edad</th>
<th>¿Sufre alguna discapacidad?</th>
<th>¿Tiene vacuna contra el Covid?</th>
<th>Su Nivel Educativo</th>
<th>Ocupación</th>
<th>¿Recibe Pensión?</th>
<th>Dirección de Calle</th>
<th>Fecha de Nacimiento</th>
<th>Correo Electrónico</th>
<th>Número de Teléfono</th>
<th>Estado Civil</th>
<th>Tiempo en la Comuna</th>
</tr>
<tr>
    <?php
    require_once 'consulta.php';
if($result) {
    $i = 1;
    
    while ($row = $result->pg_fetch_assoc)
}





    ?>
</tr>

</tbody>








      </table>
      <div class="button-container">
            <button class="nav-button" type="button" onclick="window.location.href='index2.php'">Regresar a Inicio</button>
        </div>
    </div>
   <div>
        <footer title="pie de página">
            <p>&copy;  2024 CENSO COMUNITARIO VALMAPA. TODOS LOS DERECHOS RESERVADOS.</p>
            <a href="#título">VOLVER ARRIBA</a>
        </footer>
    </div>
</body>
</html>
