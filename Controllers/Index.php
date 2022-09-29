<?php

namespace Controllers;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('Header/index');
        $this->view->render('input/index');
        $this->view->render('list/index');
        $this->view->render('Footer/index');
    }
}