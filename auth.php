<?php

require "bootstrap/init.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_GET['action'];
    $params = $_POST;
    if($action == 'register'){
        $result = register($params);
        if(!$result){
            message("There is an error in registration!");
        }else{
            message("You have successfully registered!");
        }
    }elseif ($action == 'login'){
        $result = login($params['email'], $params['password']);
        if(!$result){
            message("There is an error in login data!");
        }else{
            message("You have successfully logged in!");
        }
    }
}

require "tpl/tpl-auth.php";