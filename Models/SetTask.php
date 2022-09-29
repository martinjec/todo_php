<?php

namespace Models;

class SetTask extends DB
{
    public $task;
    public function __construct()
    {
        parent::connect();
        $this->task = $_POST['add_task'];

        $sql = 'INSERT INTO todos(tasks) VALUES (:tasks)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['tasks' => $this->task]);
    }
}