<?php
{
include_once('../Modelo/mod_conn.php');
include_once('../Modelo/mod_user.php');
 $conexion = new Connex();
    $pgconn=$conexion;

    $query = "SELECT nombre, apellido, sexo, cedula, edad, discapacidad, covidvacuna, niveleducativo, ocupacion, pension, calle, nacimiento, correo, telefono, estadocivil, tiempocomuna
	FROM valmapa.habitantesdatos";
    $result = $conexion->pg_query($pgconn, $query);








}
?>