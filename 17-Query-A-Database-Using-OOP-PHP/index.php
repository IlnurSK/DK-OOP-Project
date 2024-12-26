<?php
// Создание запросов к БД с помощью ООП

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

$testObj = new Test();
//$testObj->getUsers(); // получение всех пользователей
//$testObj->getUsersStmt("Daniel", "Nielsen"); // получение инфо по 1 пользователю
//$testObj->setUsersStmt("Il'nur", "Sirazhev", "1987-05-23"); // добавление пользователя

?>
</body>
</html>
