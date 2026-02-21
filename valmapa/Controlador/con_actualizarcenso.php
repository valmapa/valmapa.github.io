<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$cedula = $_POST['cedula'];
$edad = $_POST['edad'];
$discapacidad = $_POST['discapacidad'];
$covidvacuna = $_POST['covidvacuna'];
$niveleducativo = $_POST['niveleducativo'];
$ocupacion = $_POST['ocupacion'];
$pension = $_POST['pension'];
$calle = $_POST['calle'];
$nacimiento = $_POST['nacimiento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$estadocivil = $_POST['estadocivil'];

include_once('../MODELO/mod_conn.php');
include_once('../MODELO/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $actualizar = $con_user->ActualizarDatos($nombre, $apellido, $sexo, $edad, $discapacidad,
     $covidvacuna, $niveleducativo, $ocupacion
     , $pension, $calle, $nacimiento, $correo
     , $estadocivil, $telefono,  $pgconn);
        if ($actualizar) 
            {echo "Datos actualizados exitosamente.";
        header("Location:../Vista/paginashtml/index2.php");
        exit();
            } else{
                echo "Error al actualizar los datos.";
            }





?>