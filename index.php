<?php

require "bootsrap/init.php";

if (isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])) {
    deleteFolder($_GET['delete_folder']);
//    echo "$deletedCount folders successfully deleted!";
}

# connect to database and get data
$folders = getFolders();
$tasks = getTasks();

require "tpl/tpl-index.php";