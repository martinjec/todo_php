<form action="DelTask" class="output" method="POST">
    <?php
    $list = new Models\Index();
    $list->getTasks();
    ?>
</form>