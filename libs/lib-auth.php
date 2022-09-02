<?php
defined('BASE_PATH') || die("Permission Denied!");

function isLoggedIn()
{
    return false;
}

function login($email, $password)
{
    $user = getUserByEmail($email);
    if (is_null($user)){
        return false;
    }
    if(password_verify($password, $user->password)){
        return true;
    }
    return false;
}

function getUserByEmail($email)
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email'=>$email]);
    return $stmt->fetchAll(PDO::FETCH_OBJ)[0] ?? null;
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