<?php

$app = [];

$app['config'] = require __DIR__.'/../config.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);