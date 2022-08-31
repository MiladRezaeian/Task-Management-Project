<?php

/* folder functions */
function deleteFolder($folder_id)
{
    global $pdo;
    $sql = "delete from folders where id = $folder_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->rowCount();
}

function addFolder($folder_name)
{
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "INSERT INTO folders (name, user_id) VALUES (:folder_name, :user_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['folder_name'=>$folder_name, 'user_id'=>$current_user_id]);

    return $stmt->rowCount();
}

function getFolders()
{
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "select * from folders where user_id = $current_user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);

    return $records;
}

function getCurrentUserId()
{
    // get login user id
    return 1;
}


/* folder functions */
function getTasks()
{

}