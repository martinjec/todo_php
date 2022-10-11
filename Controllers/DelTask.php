<?php

namespace Controllers;

class DelTask extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model->delTask($_POST);
    }
}
