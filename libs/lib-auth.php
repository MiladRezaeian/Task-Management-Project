<?php
defined('BASE_PATH') || die("Permission Denied!");

function isLoggedIn()
{
    return false;
}

function login($username, $password)
{
    return 1;
}

function register($userData)
{
    global $pdo;
    # validation email username and password
    $passwordHash = password_hash($userData['password'],PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':name'=>$userData['name'], ':email'=>$userData['email'], ':password'=>$passwordHash]);
    return (bool)$stmt->rowCount();
}