<?php

define('config', [
    'base_url' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'],
    'base_dir' => $_ENV['BASE_DIR'] ?? 'igtest',
    'api_dir' => $_ENV['API_DIR'] ?? 'api',
    'debug' => $_ENV['DEBUG'] ?? true,
    'db_server' => $_ENV['DB_SERVER'] ?? 'localhost',
    'db_user' => $_ENV['DB_USER'] ?? 'root',
    'db_password' => $_ENV['DB_PASSWORD'] ?? 'Info@del24',
    'db_name' => $_ENV['DB_NAME'] ?? 'test'
]);
