<?php
require_once "../bootstrap/init.php";

if (!isAjaxRequest()) {
    diePage("Invalid Request!");
}

if (!isset($_POST['action']) || empty($_POST['action'])) {
    diePage("Invalid Action!");
}

switch ($_POST['action']) {
    case "addFolder";
        if(!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3){
            echo 'Name of folder should be more than 2 character.';
            die();
        }
        echo addFolder($_POST['folderName']);
        break;
    case "addTask";
//        var_dump($_POST);
        break;
    default:
        diePage("Invalid Action!");
}

