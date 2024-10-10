<?php

namespace sena\libs;

class Controller 
{

    /**
    *Metodo para cargarun modelo desde la carpeta model
    *
    *este metodo se utilizara para cargar los modelos de form dinamico, solo tiene que mencionar el modelo
    *
    *@param string 
    *@acces public
    *@return object Instancia del modelo
    */

    public function model($model)
    {
        //construye el nombre del modelo
        $model = "Sena\model\\" .$model;
        return new $model;
    }

    public function view($view, $data =[] ,$layout) 
    {
        ob_start();
        $view = $view . '.view';
        if (file_exists ('../app/views/' . $view . '.php')){
            require_once('../app/views/' . $view . '.php');
            $contend = ob_get_clean();
            require_once('../app/views/layout/' . $layout . '.layout.php');
        } else {
            die ("La vista $view  no existe");
        }
    }
}