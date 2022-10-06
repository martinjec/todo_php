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
            $this->id = $row['ID'];         
        } 
    }

    public function setTask()
    {
        $this->task = $_POST['add_task'];
        $sql = 'INSERT INTO todos(tasks) VALUES (:tasks)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['tasks' => $this->task]);
    }

    public function delTask()
    {
        $this->data = array_keys($_POST);
        $this->id = $this->data[0];
        $sql = "DELETE FROM todos WHERE id= $this->id";
        $stmt = $this->connect();
        $stmt->exec($sql);
    }
}
