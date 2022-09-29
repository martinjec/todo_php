<?php

namespace Models;

class Index extends DB
{
    public function getTasks()
    {

        $sql = "SELECT * FROM todos";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            $delBtn = '<input type="submit" class="del_btn"name="' . $row['ID'] . '" value="Delete" />';
            echo '<li><div class="todo"><div class="task"">' . $row['tasks'] . '</div>' . $delBtn . '</div></li>';
        }
    }
}