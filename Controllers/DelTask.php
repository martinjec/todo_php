<?php

namespace Controllers;

use \Models;

class DelTask extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $set = new Models\DelTask();
        $set->__construct();
    }
}
