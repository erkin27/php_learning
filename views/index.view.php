<?php require 'partials/head.php'; ?>
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

<h1>Submit your form</h1>

<form method="POST" action="/names">

    <input name="name">

    <button type="submit">Submit</button>

</form>
</br>

<?php foreach ($users as $user):?>

    <li><?= $user->name; ?></li>

<?php endforeach;?>

<?php require 'partials/footer.php'; ?>
