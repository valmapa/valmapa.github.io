<?php

$alias = $_POST['alias'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$cedula = $_POST['cedula'];

{
include_once('../Modelo/mod_conn.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();
        if($pgconn)
            include_once('../Modelo/mod_user.php');
                $con_user = new User();
                    $resultado = $con_user->AgregarUser($alias, $correo, $clave, $cedula, $pgconn);
                        if ($resultado) 
                            {echo "Usuario agregado exitosamente.";
                                header("Location: ../Vista/paginashtml/iniciosesion.php");
                                exit();
                            } else{
                            echo "Error al agregar el usuario.";
                            }
}


?>