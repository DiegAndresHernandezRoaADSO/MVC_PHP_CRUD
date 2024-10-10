<?php

namespace Sena\libs;

class Model {

    protected $db;
    protected $connection;

    public function __construct()
    {
        //creamos una estancia de la coneccion
        $this-> db = new Database();

        $this-> connection = $this->db->getconnection();
    }

    /** 
    * Metodo para seleccionar todos los registros de una tabla en la base de datos
    *
    * @parent string $table
    * @return array
    */

    public function select($table = "")
    {
        $stm = $this-> connection ->prepare ("SELECT * FROM $table");
        $stm->execute();
        return $this->fecthAll();
    }
}