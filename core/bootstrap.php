<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Router.php';
require 'Request.php';

$app = [];

$app['config'] = require __DIR__.'/../config.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);