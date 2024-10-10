<?php

namespace sena\controllers;

use PDO;

class Database {
    private $connection;

    public function __construct() {
        $options = [
            PDO:: ATTR_ERRMODE -> PDO:: ERRMODE_EXCEPTION,
            PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $this -> connection = "mysql:hots=".constant("HOST")."; dbname = ".constant("DB")."; charset" .constant("CHARSET");
        $this -> connection = new PDO($this->connection, constant("USER"),constant("PASSWORD"),$options);
        $this -> connection -> exec("SET CHARACTER SET UTF8");
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function claeConnection()
    {
        $this->connection = null;
    }
}