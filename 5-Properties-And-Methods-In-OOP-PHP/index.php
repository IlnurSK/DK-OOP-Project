<?php
// Подключаем необходимый класс

require_once 'includes/person.inc.php';

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

// Свойства и методы в ООП /includes/person.inc.php

// Процедурный стиль создание свойств (переменные)

//$name01 = "Daniel";
//$eyeColor01 = "Blue";
//$age01 = 28;
//
//$name02 = "Daniel";
//$eyeColor02 = "Blue";
//$age02 = 28;

// ООП стиль получения свойств

$person1 = new Person();
$person1->setName("Il'nur");
echo $person1->name;

$person2 = new Person();
$person2->setName("Timmy");
echo $person2->name;

?>
</body>
</html>