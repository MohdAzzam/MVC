<?php
namespace MVC\core;

class app
{
    private $controller;
    private $method;
    private $params=[];
    public function __construct()
    {
        $this->url();
        $this->render();
    }
    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode("/", $_SERVER['QUERY_STRING']);
            //controller
            $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
            //method
            $this->method = isset($url[1]) ? $url[1] : "index";
            unset($url[0], $url[1]);
            //params
            $this->params = array_values($url);
        }else{
            $this->controller="homecontroller";
            $this->method="index";
        }
    }

    private function render()
    {
        $controller="MVC\controllers\\".$this->controller;
       
        if(class_exists($controller)){
            
            $controller= new $controller;

            if(method_exists($controller,$this->method)){
               call_user_func_array([$controller,$this->method],$this->params);
                // echo 'hello from method';
            }else{
                
                echo 'method not exist';
            }

        }else{
            echo "Class Not exist";
        }
    }
}
