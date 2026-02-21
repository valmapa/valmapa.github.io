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
$estadocivil = $_POST['estadocivil'] ?? '';
$telefono = $_POST['telefono'] ?? '';

include_once("../Modelo/mod_conn.php");
include_once("../Modelo/mod_user.php");
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $borrar = $con_user->BorrarDatos($nombre, $apellido, $sexo, $cedula, $edad,
     $discapacidad, $covidvacuna, $niveleducativo
     , $ocupacion, $pension, $calle, $nacimiento
     , $correo, $estadocivil, $telefono, $pgconn);
        if ($borrar) 
            {echo "Usuario borrado exitosamente.";
        echo "<br><a href='../VISTA/PAGINAS/index.html'>Volver al Inicio</a>";
            } else{
                echo "Error al borrar el usuario.";
            }








?>