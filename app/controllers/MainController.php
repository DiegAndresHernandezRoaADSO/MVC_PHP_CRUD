<?php

namespace sena\controllers;

use sena\libs\Controller;

class MainController extends Controller
{
    public function __construct()
    {
        // echo "Hola controlador main";
    }

    public function index () 
    {
        $data = [
            'title' => 'Portada del proyecto',
        ];
        $this -> view('home', $data,'app');
    }
}