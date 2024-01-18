<?php

class conexion
{

    public $host = "127.0.0.1";
    public $user = "root";
    public $clave = "Miku3295";
    public $dbname = "sistemacomentarios";




    function crearConexion()
    {
        try {
            $con=new PDO('mysql: host="localhost"; dbname='.$this->dbname.'', $this->user, $this->clave);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




            return $con;


        } catch (Exception $ex) {

            print_r('ERROR: ' . $ex->getMessage());
        }
    }
}
