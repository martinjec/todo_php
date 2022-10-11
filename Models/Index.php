<?php

namespace Models;

class Index extends DB
{
    public function __construct()
    {
        parent::connect();
    }

    public function getTasks()
    {
        $sql = "SELECT * FROM todos";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            $this->data[] = $row;        
        } 
    }

    public function setTask($x)
    {
        $this->task = $x;
        $sql = 'INSERT INTO todos(tasks) VALUES (:tasks)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['tasks' => $this->task]);
    }

    public function delTask($x)
    {
        $this->data = array_keys($x);
        $this->id = $this->data[0];
        $sql = "DELETE FROM todos WHERE id= $this->id";
        $stmt = $this->connect();
        $stmt->exec($sql);
    }
}
