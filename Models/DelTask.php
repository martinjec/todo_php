<?php

namespace Models;

class DelTask extends DB
{
    public $data;

    public function __construct()
    {
        $this->data = array_keys($_POST);
        $this->id = $this->data[0];
        $sql = "DELETE FROM todos WHERE id= $this->id";
        $stmt = $this->connect();
        $stmt->exec($sql);
    }
}