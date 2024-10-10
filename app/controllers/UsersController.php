<?php

namespace sena\controllers;

use sena\libs\Controller;

class UsersController extends Controller 
{

    protected $model = " ";

    public function __construct()
    {
        $this->model = $this->model("user");
        // echo "Hola controlador users";
    }

    public function index() 
    {
        $users = $this->model->getUsers();

        $data = [
            'title' => 'Listado de usuarios',
            'users' => $users

        ];

        $this -> view('users/index', $data ,'app');
    }


    public function edit($id)
    {
        $user = $this->model->getuser($i){
            print_r($uses)
        }

        $data =[
            "title" => "Editar usuario",
            "user" => $user
        ];
    }
}
