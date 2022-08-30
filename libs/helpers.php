<?php

function getCurrentUrl()
{
//    return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return 1;
}

function diePage($msg)
{
    echo $msg;
    die();
}
