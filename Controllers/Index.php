<?php

namespace Controllers;

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
            $x = $data;
            $this->view->render('list/index', $x);
        }
    }
}
