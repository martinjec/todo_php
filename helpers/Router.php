<?php

namespace helpers;

class Router
{
    public $url;

    //Prepare data
    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $this->url = $url;
    }

    public function getRoute()
    {
        $url = $this->url;
        if (empty($url[1])){
            $class = 'Controllers\Index';
            new $class;
        }
        if (!empty($url[1])) {
            $class = 'controllers\\' . $url[1];
            new $class;
        }
        if (!empty($url[1])) {
            if ($url[1] !== 'index') {
                $class = 'Controllers\Index';
                return new $class;
            }
        }
    }
}   
   