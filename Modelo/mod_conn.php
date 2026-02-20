<?php

class Connex
{
    private $usuario;
    private $clave;
    private $servidor;
    private $basededatos;
    private $puerto;
    private $pgconn;


function Connex()
    {

        $this->usuario="postgres";
        $this->clave="postgres";
        $this->servidor="localhost";
        $this->basededatos="valmapa";
        $this->puerto=  5432;
        $this->pgconn= "";
    }

public function conectar(): mixed   
    {
        $pgconn = pg_connect("host='localhost' port='5432' dbname='valmapa'
    user='postgres' password='postgres'");

        if(!$pgconn)
        {
           die("Error de conexion");

        }
        return $pgconn;
    }
}
 



?>