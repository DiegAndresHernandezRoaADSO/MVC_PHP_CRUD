<?php

namespace Sena\model;

use Sena\libs\model;

class User extends model
{
    protected $table = "users";

    public function __construct()
    {
        parent::___construct();

    }

    public function getUsers(){
        return $this-> sele($this->table);
    }
}