<?php
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$sexo = $_POST['sexo'] ?? '';
$cedula = $_POST['cedula'] ?? '';
$edad = $_POST['edad'] ?? '';
$discapacidad = $_POST['discapacidad'] ?? '';
$covidvacuna = $_POST['covidvacuna'] ?? '';
$niveleducativo = $_POST['niveleducativo'] ?? '';
$ocupacion = $_POST['ocupacion'] ?? '';
$pension = $_POST['pension'] ?? '';
$calle = $_POST['calle'] ?? '';
$nacimiento = $_POST['nacimiento'] ?? '';
$correo = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$estadocivil = $_POST['estadocivil'] ?? '';

include_once('../MODELO/mod_conn.php');
include_once('../MODELO/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $consulta = $con_user->ConsultarDatos($cedula, $pgconn);
        if ($consulta) 
            {echo "sus datos son los siguientes:<br>";
            while ($row = pg_fetch_assoc($consulta)) {
                echo "<table id='datos' border='1' cellpadding='10' align='center'>";
                foreach ($row as $key => $value) {
                    echo "<tr><td><strong>" . htmlspecialchars($key) . ":</strong></td><td>" . htmlspecialchars($value) . "</td></tr>";
                }
                echo "</table>";
                echo "<a href='../Vista/Publico/paginashtml/vis_actualizarcenso.php'>Actualizar Datos</a><br>";
                echo "<a href='../Vista/Publico/paginashtml/index2.php'>Volver a Página Principal</a><br>";
                }
            }
            else{
                echo "Error al consultar el usuario.";
            }





?>