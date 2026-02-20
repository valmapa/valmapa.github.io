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

if ($pgconn) {
    $con_user = new User();
    $resultado = $con_user->AgregarDatos($nombre, $apellido, $sexo, $cedula, $edad,
     $discapacidad, $covidvacuna, $niveleducativo
     , $ocupacion, $pension, $calle, $nacimiento
        , $correo, $estadocivil, $telefono, $pgconn);
            if ($resultado) 
            {echo "Censo agregado exitosamente.";
                header("Location: ../Vista/Publico/paginashtml/index2.php");
                exit();
            } else{
                echo "Error al agregar el censo.";
            }
} else {
    echo "Error al conectar a la base de datos.";
}



?>