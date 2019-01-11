<?php

require_once 'init.php';
$_SESSION['user_id'] = 1;

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