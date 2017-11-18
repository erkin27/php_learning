<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <nav>
        <li>
            <a href="about">About</a>
        </li>
        <li>
            <a href="contact">Contact</a>
        </li>
    </nav>

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
    
</body>
</html>