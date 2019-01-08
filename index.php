<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>TODO:</title>
  </head>
  <body>
    <header>
    </header>

    <main>
        <h1>TODO:</h1>
        <ul>
            <li><span class="item">Make Lunch</span></li>
            <li><span class="item done">Go to meeting</span></li>
        </ul>
        <form class="item-add" action="add.php" method="post">
            <input class="item-input" type="text" name="item-name" placeholder="Enter you todo list item here.">
            <input type="submit" value="Add">
        </form>
    </main>

    <footer id="main-footer">
      Copyright &copy; 2019
    </footer>
  </body>
</html>