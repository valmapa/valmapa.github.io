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

include_once('../Modelo/mod_conn.php');
include_once('../Modelo/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $consulta = $con_user->ConsultarDatos($cedula, $pgconn);
        if ($consulta) 
            {echo "sus datos son los siguientes:<br>";
            while ($row = pg_fetch_assoc($consulta)) {
                echo "<!DOCTYPE html>
                        <html lang='es'>
                        <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Censo Comunitario VALMAPA</title>

                        </head>";
                echo "<body style=' background-color: #1875b8;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 10px;
            padding: 10px;'>
                        <h1 style='text-align: center;'>Datos de Usuario</h1>";
                echo "<table class='datos' id='datos' border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 80%; color: #ffffff; margin: 20px auto; font-size: 16px;
                background-color: rgba(0, 0, 0, 0.5);'>
                        <tr><th>Campos</th><th>Datos</th></tr>";
                foreach ($row as $key => $value) {
                    echo "<tr><td><strong>" . htmlspecialchars($key) . ":</strong></td><td>" . htmlspecialchars($value) . "</td></tr>";
                }
                echo "</table>";
              
                echo "<a href='../Vista/paginashtml/vis_actualizarcenso.php' style=
                'color: #000000; text-decoration: none; border: 4px solid #be8b16; border-radius: 8px; padding: 5px;
                position: absolute; bottom: 200px; left: 50%; transform: translateX(-50%); background-color: #ffffff;'
                    >
                Actualizar Datos</a><br>";
                echo "<br>";
                echo "<a href='../Vista/paginashtml/index2.php' style=
                'color: #000000; text-decoration: none; border: 4px solid #be8b16; border-radius: 8px; padding: 5px;
                position: absolute; bottom: 150px; left: 50%; transform: translateX(-50%); background-color: #ffffff;'
                    >Volver a Página Principal</a><br>";
                }
            }
            else{
                echo "Error al consultar el usuario.";
            }





?>