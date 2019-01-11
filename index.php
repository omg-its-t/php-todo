<?php

require_once 'app/init.php';

//creating a prepared statement to grab all the items
$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user = :user
");
//run the query and add to array
$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);

//if this is positive number set to itemsQuery, otherwise set it to an empty array
$items = $itemsQuery->rowCount() ? $itemsQuery : [];

print_r($items);

foreach($items as $item){
    echo $item['name'], '<br>';
}

?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>TODO:</title>
  </head>
  <body>
    <header>
    </header>

    <main>
        <h1>TODO:</h1>
        <ul class="items">
            <li><span class="item">Make Lunch</span>
                <a href="#" id="mark-complete"><i class="fas fa-check"></i></a>
                <a href="#" id="remove"><i class="fas fa-times"></i></a>
            </li>
        </ul>
        <form class="item-add" action="add.php" method="post" autocomplete="off">
            <input class="item-input" type="text" name="item-name" placeholder="Enter you todo list item here.">
            <input class="btn" type="submit" value="+ Add">
        </form>
    </main>
  </body>
</html>


<!--
    when marked complete remove the check mark button, and put a line through the text
--> 