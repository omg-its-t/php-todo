<?php

require_once 'init.php';
//using user 1 for now until login/out functionality implememted.
$_SESSION['user_id'] = 1;

//check to see if a value is available
if(isset($_POST['item-name'])){
    //trim() removes whitespace if user enters spaces
    $name = trim($_POST['item-name']);
    $user = 1;

    if(!empty($name)){
        $addQuery = $db->prepare("
            INSERT INTO items (name, user, done, created)
            VALUES (:name, :user, 0, NOW())
        ");
    }

    $addQuery->execute([
        'name' => $name,
        'user' => $user,
    ]);
};
header('Location: ../index.php');