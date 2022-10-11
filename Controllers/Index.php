<?php

namespace Controllers;

use \Models;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('Header/index');
        $this->view->render('input/index');
        $this->list();
        $this->view->render('Footer/index');
        
    }

    public function list()
    {
        
        $this->model->getTasks();
        $model = $this->model->data;
        foreach ($model as $data) {
            $_POST['ID'] = $data['ID'];
            $_POST['task'] = $data['tasks'];
            $this->view->render('list/index');
        }
    }
}
