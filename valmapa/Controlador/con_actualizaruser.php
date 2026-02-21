<?php
$alias = $_POST['alias'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];


include_once('../MODELO/mod_conn.php');
include_once('../MODELO/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();

    $con_user = new User();
    $actualizar = $con_user->ActualizarUser($alias, $correo, $clave,  $pgconn);
        if ($actualizar) 
            {echo "<table name='Nuevos Datos de Usuario' id='datos' border='1' cellpadding='10' align='center'>";
            echo "<caption>Nuevos Datos de Usuario</caption>";
                echo "<tr><td><strong>Alias:</strong></td><td>" . htmlspecialchars($alias) . "</td></tr>";
                echo "<tr><td><strong>Correo:</strong></td><td>" . htmlspecialchars($correo) . "</td></tr>";
                echo "<tr><td><strong>Clave:</strong></td><td>" . htmlspecialchars($clave) . "</td></tr>";
                echo "</table>";
                echo "<p align='center'>Usuario actualizado exitosamente.</p>";
                echo "<a href='../Vista/Publico/paginashtml/index2.php'>Volver a Página Principal</a><br>";
            } else{
                echo "Error al actualizar el usuario.";
            }





?>