<?php

$tasks = $app['database']->selectAll('todos');
$users = $app['database']->selectAll('users');


require __DIR__.'/../views/index.view.php';