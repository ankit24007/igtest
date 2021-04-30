<?php

define('config', [
    'base_url' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'],
    'base_dir' => $_ENV['BASE_DIR'],
    'api_dir' => $_ENV['API_DIR'],
    'debug' => $_ENV['DEBUG'],
    'db_server' => $_ENV['DB_SERVER'],
    'db_user' => $_ENV['DB_USER'],
    'db_password' => $_ENV['DB_PASSWORD'],
    'db_name' => $_ENV['DB_NAME']
]);
