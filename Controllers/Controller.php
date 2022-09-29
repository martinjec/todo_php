<?php

namespace Controllers;

use \Views;

class Controller
{
    public function __construct()
    {
        $this->view = new Views\View();
    }
}