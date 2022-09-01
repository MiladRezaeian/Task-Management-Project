<?php
require "bootstrap/init.php";

if (!isLoggedIn()){
    //redirect to auth form
    header("Location: " . site_url('auth.php'));
}

if (isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])) {
    deleteFolder($_GET['delete_folder']);
//    echo "$deletedCount folders successfully deleted!";
}

if (isset($_GET['delete_task']) && is_numeric($_GET['delete_task'])) {
    deleteTask($_GET['delete_task']);
//    echo "$deletedCount folders successfully deleted!";
}

# connect to database and get data
$folders = getFolders();
$tasks = getTasks();

require "tpl/tpl-index.php";