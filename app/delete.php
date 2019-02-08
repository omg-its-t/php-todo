<?php

require_once 'init.php';
//using user 1 for now until login/out functionality implememted.
$_SESSION['user_id'] = 1;

$deleteQuery = $db->prepare("
        DELETE FROM 'items' [WHERE id = $_GET['id']]
        ");

$deleteQuery->execute();


header('Location: ../index.php');