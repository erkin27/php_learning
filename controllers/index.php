<?php

$tasks = $app['database']->selectAll('todos');


require __DIR__.'/../views/index.view.php';