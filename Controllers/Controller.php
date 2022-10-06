<?php

namespace Controllers;

use \Views;
use \Models;

class Controller
{
    public function __construct()
    {
        $this->view = new Views\View();
        $this->model = new Models\Index();
    }
}
