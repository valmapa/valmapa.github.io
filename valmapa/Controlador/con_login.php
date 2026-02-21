<?php
session_start();
$alias = $_POST['alias'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$cedula = $_POST['cedula'];

//
$_SESSION['alias'] = $alias;
$_SESSION['correo'] = $correo;
$_SESSION['clave'] = $clave;
$_SESSION['cedula'] = $cedula;

//
include('C:\xampp\php\PEAR');
include_once('../Modelo/mod_conn.php');
include_once('../Modelo/mod_user.php');
    $conexion = new Connex();
    $pgconn=$conexion->conectar();
    if ($pgconn) 
    {
        $query = "SELECT * FROM valmapa.habitantescuentas WHERE cedula='$cedula'  AND clave='$clave' ";
        $result = pg_query($pgconn, $query) or die;
        if ($result) 
        {   session_start();
            $_SESSION['cedula'] = $cedula;
            $_SESSION['clave'] = $clave;
            header("Location:../Vista/paginashtml/vis_bienvenido.php");
            exit();
        } else {
            echo "Credenciales incorrectas. Inténtalo de nuevo.";
        }
       
        
    }













?>