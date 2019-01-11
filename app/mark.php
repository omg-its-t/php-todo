<?php

require_once 'init.php';
//using user 1 for now until login/out functionality implememted.
$_SESSION['user_id'] = 1;

//using GET because these vars are in the query string and not a form submission
if(isset($_GET['as'], $_GET['id'])){
    $as = $_GET['as'];
    $id = $_GET['id'];

    switch($as){
        case 'done':
            $doneQuery = $db->prepare("
                UPDATE items
                SET done = 1 
                WHERE id = :id
                AND user = :user
            ");
            //to make sure same user is updating own item we take the sessions user id var
            $doneQuery->execute([
                'id' => $id,
                'user' => $_SESSION['user_id']
            ]);
        break;
    }
}
header('Location: ../index.php');