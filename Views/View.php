<?php

namespace Views;

class View
{
    public function render($name, $data='')
    {
        require "Views/$name.php";
    }
}
