<?php

require "bootstrap/init.php";

$home_url = site_url();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_GET['action'];
    $params = $_POST;
    if($action == 'register'){
        $result = register($params);
        if(!$result){
            message("There is an error in registration!");
        }else{
            message("You have successfully registered! <br>
            <a href='{$home_url}auth.php'>Please Login</a>");
        }
    }elseif ($action == 'login'){
        $result = login($params['email'], $params['password']);
        if(!$result){
            message("There is an error in login data!");
        }else{
            message("You have successfully logged in! <br>
            <a href='{$home_url}'>Manage Your Tasks</a>");
        }
    }
}

require "tpl/tpl-auth.php";