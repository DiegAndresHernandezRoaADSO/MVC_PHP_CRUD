<?php

namespace Sena\model;

use Sena\libs\model;

class User extends model
{
    protected $table = "users";

    public function __construct(){
        parent::__construct();

    }

    public function getUsers()
    {
        return $this->select($this->table);
    }
}