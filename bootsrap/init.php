<?php

require "constants.php";
require "config.php";
require "libs/helpers.php";


try {
    $pdo = new PDO("mysql:dbname=$database_config->database;host=$database_config->host", $database_config->username, $database_config->password);
} catch (PDOException $e) {
    diePage('Connection failed: ' . $e -> getMessage());
}

require "libs/lib-auth.php";
require "libs/lib-tasks.php";