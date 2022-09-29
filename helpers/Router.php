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
    //Run routes
    public function getRoute()
    {
        $url = $this->url;
        if (empty($url[1])) {
            $class = 'Controllers\Index';
            $class = new $class;
        } else if (!empty($url[1])) {
            $folders = array('controllers', 'models',);
            foreach ($folders as $folder) {
                $file = $folder . '\\' . $url[1];
                if (class_exists($file)) {
                    $class = new $file;
                    $start = "Controllers\Index";
                    return new $start;
                }
            }
        }
    }
}