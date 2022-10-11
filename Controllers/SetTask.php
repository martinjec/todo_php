<?php

namespace Controllers;

class SetTask extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model->setTask($_POST['add_task']);
    }
}
