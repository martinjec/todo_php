<?php
    $delBtn = '<input type="submit" class="del_btn"name="' . $data['ID'] . '" value="Delete" />';
    echo '<li><div class="todo"><div class="task"">' . $data['tasks'] . '</div>' . $delBtn . '</div></li>';
