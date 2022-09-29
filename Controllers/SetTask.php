<?php

namespace Controllers;

use \Models;

class SetTask extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $set = new Models\SetTask();
    }
}