<?php

namespace Views;

class View
{
    public function render($name)
    {
        require "Views/$name.php";
    }
}
