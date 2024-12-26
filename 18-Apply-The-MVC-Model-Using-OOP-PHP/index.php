<?php
// Применение модели MVC

include "includes/class-autoload.inc.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$usersObj = new UsersView();
$usersObj->showUser("Il'nur");

//$usersObj2 = new UsersContr();
//$usersObj2->createUser("Ivan", "Ivanov", "2000-01-01");

?>
</body>
</html>
