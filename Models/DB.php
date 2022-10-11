<?php

namespace Models;

use \PDO;

abstract class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbName = 'tasks';

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $this->pdo = new PDO($dsn, $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $this->pdo;
    }
}
