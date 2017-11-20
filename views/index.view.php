<?php require 'partials/head.php'; ?>

<h1>Home Page</h1>

    <ul>
        <?php foreach ($tasks as $task):?>
        <li>
            <?php if ($task->completed):?>

                <span style="text-decoration: line-through"><?= $task->description ?></span>

            <?php else:?>

                <?= $task->description?>

            <?php endif; ?>
        </li>
        <?php endforeach;?>
    </ul>


<?php require 'partials/footer.php'; ?>
