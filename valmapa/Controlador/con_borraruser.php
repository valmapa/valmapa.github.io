<?php
$alias = $_POST['alias'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$cedula = $_POST['cedula'];

include_once('../Modelo/mod_conn.php');
include_once('../Modelo/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $borrar = $con_user->BorrarUser($alias, $correo, $clave, $cedula, $pgconn);
        if ($borrar) 
            {echo "<p>Usuario borrado exitosamente.</p>";
        header("Location:../Vista/paginashtml/index.html");
            } else{
                echo "Error al borrar el usuario.";
            }





?>