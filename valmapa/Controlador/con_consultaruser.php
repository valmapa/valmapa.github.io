<?php
$cedula = $_POST['cedula'];
$clave = $_POST['clave'];


include_once('../Modelo/mod_conn.php');
include_once('../Modelo/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $consulta = $con_user->ConsultarUser($cedula, $clave, $pgconn);
        if ($consulta) 
            {echo "$_POST[cedula], sus datos son los siguientes:<br>";
            while ($row = pg_fetch_assoc($consulta)) {
                echo "Alias: " . $row['alias'] . "<br>";
                echo "Correo: " . $row['correo'] . "<br>";
                echo "ID: " . $row['id'] . "<br>";
                echo "<a href='../Vista/Publico/paginashtml/index2.php'>Volver a Página Principal</a><br>";
            }
            } else{
                echo "Error al consultar el usuario.";
            }





?>