<?php


include_once('../modelos/conexion.php');


class comentarioscontrollador
{






    function mostrarComentarios()
    {
        $conexion = new conexion();
        $sql = "SELECT * FROM comentarios";
        $valor=$query = $conexion->crearConexion()->prepare($sql);
        $query->execute();
        
        
        return $valor->fetchAll();
    }
}
