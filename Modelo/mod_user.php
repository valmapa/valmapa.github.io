<<?php
class User 
{
private $alias;
private $correo;
private $clave;
private $nombre;
private $apellido;
private $sexo;
private $cedula;
private $edad;
private $discapacidad;
private $covidvacuna;
private $niveleducativo;
private $ocupacion;
private $pension;
private $calle;
private $nacimiento;
private $estadocivil;
private $telefono;
private $pgconn;


    public function 
    iniciar ( $alias, $correo, $clave, $nombre, $apellido, $sexo, $cedula, $edad, $discapacidad, $covidvacuna, $niveleducativo, $ocupacion, $pension, $calle, $nacimiento, $estadocivil, $telefono, $pgconn) {
        $this->alias = $alias;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->cedula = $cedula;
        $this->edad = $edad;
        $this->discapacidad = $discapacidad;
        $this->covidvacuna = $covidvacuna;
        $this->niveleducativo = $niveleducativo;
        $this->ocupacion = $ocupacion;
        $this->pension = $pension;
        $this->calle = $calle;
        $this->nacimiento = $nacimiento;
        $this->estadocivil = $estadocivil;
        $this->telefono = $telefono;
        $this->pgconn = $pgconn;
    }

    public function AgregarUser($alias, $correo, $clave, $cedula, $pgconn): mixed
    {
      
    $query = "INSERT INTO valmapa.habitantescuentas (alias, correo, clave, cedula) VALUES ('$alias', '$correo', '$clave','$cedula')";
    $rec = pg_query($pgconn, $query) or die;
       return $rec;
       if ($rec) {
           echo "Usuario agregado exitosamente.";
       } else {
           echo "Error al agregar el usuario.";
       }

    }

    public function AgregarDatos($nombre, $apellido, $sexo, $cedula, $edad, $discapacidad, $covidvacuna, $niveleducativo, $ocupacion, $pension, $calle, $nacimiento, $correo, $estadocivil, $telefono, $pgconn) {
        $query = "INSERT INTO valmapa.habitantesdatos (nombre, apellido, sexo, cedula, edad, discapacidad, covidvacuna, niveleducativo, ocupacion, pension, calle, nacimiento, correo, telefono, estadocivil) 
        VALUES ('$nombre', '$apellido', '$sexo', '$cedula', '$edad', '$discapacidad', '$covidvacuna', '$niveleducativo', '$ocupacion', '$pension', '$calle', '$nacimiento', '$correo', '$telefono', '$estadocivil')";
        $rec = pg_query($pgconn, $query) or die;
        return $rec;
        if ($rec) {
            echo "Datos del habitante agregados exitosamente.";
        } else {
            echo "Error al agregar los datos del habitante.";
        }
    }

    public function ActualizarUser($alias, $correo, $clave, $pgconn) {
        $query = "UPDATE valmapa.habitantescuentas
	SET alias='$alias', correo='$correo', clave='$clave' WHERE alias='$alias' AND correo='$correo' AND clave='$clave'";
        $rec = pg_query($pgconn, $query) or die;
        return $rec;
        if ($rec) {
            echo "Usuario actualizado exitosamente.";
        } else {
            echo "Error al actualizar el usuario.";
        }
    }
    public function BorrarUser($alias, $correo, $clave, $cedula, $pgconn) 
    {
        $query = "DELETE FROM valmapa.habitantescuentas WHERE
         alias='$alias' AND correo='$correo'
          AND clave='$clave'
            AND cedula='$cedula'";
        $rec = pg_query($pgconn, $query) or die;
        return $rec;
        if ($rec) {
            echo "Usuario eliminado exitosamente.";
        } else {
            echo "Error al eliminar el usuario.";
        }
    }
    public function ConsultarUser($cedula, $clave, $pgconn) {
        $query = "SELECT * FROM valmapa.habitantescuentas WHERE cedula='$cedula' AND clave='$clave'";
        $rec = pg_query($pgconn, $query) or die;
        return $rec;
        if ($rec) {
            echo "Usuario encontrado.";
            return pg_fetch_assoc($rec);
        } else {
            echo "Usuario no encontrado.";
            return null;
        }
    }
    public function ConsultarDatos($cedula, $pgconn) {
        $query = "SELECT * FROM valmapa.habitantesdatos WHERE cedula='$cedula'";
        $rec = pg_query($pgconn, $query) or die;
        return $rec;
        if ($rec) {
            echo "Datos del habitante encontrados.";
            return pg_fetch_assoc($rec);
        } else {
            echo "Datos del habitante no encontrados.";
            return null;
        }
    }    
    public function ActualizarDatos($nombre, $apellido, $sexo, $cedula, $edad, $discapacidad, $covidvacuna, $niveleducativo, $ocupacion, $pension, $calle, $nacimiento, $correo, $estadocivil, $telefono, $pgconn) {
        $query = "UPDATE valmapa.habitantesdatos SET nombre='$nombre', apellido='$apellido', sexo='$sexo', cedula='$cedula', edad='$edad', discapacidad='$discapacidad', covidvacuna='$covidvacuna', niveleducativo='$niveleducativo', ocupacion='$ocupacion', pension='$pension', calle='$calle', nacimiento='$nacimiento', correo='$correo', estadocivil='$estadocivil', telefono='$telefono'";
        $rec = pg_query($pgconn, $query) or die;
        return $rec;    
        if ($rec) {
            echo "Datos del habitante actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos del habitante.";
        }
    }
    public function BorrarDatos($nombre, $apellido, $sexo, $cedula, $edad, $discapacidad, $covidvacuna, $niveleducativo, $ocupacion, $pension, $calle, $nacimiento, $correo, $telefono, $estadocivil, $pgconn) {
        $query = "DELETE FROM valmapa.habitantesdatos WHERE
        cedula='$cedula'";

        $rec = pg_query($pgconn, $query) or die;
        return $rec;
        if ($rec) {
            echo "Datos del habitante eliminados exitosamente.";
        } else {
            echo "Error al eliminar los datos del habitante.";
        }
    }

}

?>