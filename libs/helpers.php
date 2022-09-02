<?php
defined('BASE_PATH') || die("Permission Denied!");

function diePage($msg)
{
    echo $msg;
    die();
}

function message($msg)
{
    echo $msg;
}

function redirect($url)
{
    header("Location: $url");
    die();
}

function isAjaxRequest()
{
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
    }
    return false;
}

function dd($var)
{
    echo "<pre style='font-weight: bolder;color: #9c4100; background: lightgray; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
    var_dump($var);
    echo "</pre>";
}

function site_url($uri = '')
{
    return BASE_URL . $uri;
}