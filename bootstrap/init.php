<?php
session_start();

require "constants.php";
require BASE_PATH . "/bootstrap/config.php";
require BASE_PATH . "/libs/helpers.php";

try {
    $pdo = new PDO("mysql:dbname=$database_config->database;host=$database_config->host", $database_config->username, $database_config->password);
} catch (PDOException $e) {
    diePage('Connection failed: ' . $e -> getMessage());
}

require BASE_PATH . "/libs/lib-auth.php";
require BASE_PATH . "/libs/lib-tasks.php";
