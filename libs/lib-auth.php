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
    return 1;
}