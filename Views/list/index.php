<?php
    $delBtn = '<input type="submit" class="del_btn"name="' . $_POST['ID'] . '" value="Delete" />';
    echo '<li><div class="todo"><div class="task"">' . $_POST['task'] . '</div>' . $delBtn . '</div></li>';
