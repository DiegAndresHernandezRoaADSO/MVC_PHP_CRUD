<?php

namespace sena\libs;

class core{
    protected $controller = 'MainController';
    protected $method = 'index';
    protected $parameters = [];

    public function __construct(){
        $url = $this ->getUrl();
        if($url != "" && file_exists('../app/controllers/'.ucwords($url[0].'controller.php'))){
          $this -> controller= ucwords($url[0].'controller');
          unset($url[0]);
        }
        $obj = $this ->controller;
        $obj = 'sena\controllers\\' .$this -> controller;
        $this -> controller = new $obj ;
  
        if(isset($url[1])){
          if (method_exists($this -> controller, $url[1])){
              $this -> method = $url[1];
              unset($url[1]);
          }else{
          die("El metodo solicitado no  fue programado");
        }
    }
  
        $this-> parameters = $url ? array_values($url): [];
  
        call_user_func_array([$this -> controller, $this -> method], $this -> parameters);
    }

    public function getUrl()
    {
        // var_dump($_GET['url']);
        $url = "";
        if(isset($_GET['url'])){
            // Eliminamos eL ultimo caracter de la URL
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);

        }
        return $url;
    }
}
