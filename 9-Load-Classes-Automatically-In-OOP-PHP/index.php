<?php

include "includes/autoloader.inc.php"; // подключаем скрипт с автозагрузкой классов

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
// Автоматическая загрузка классов

$person1 = new Person\Person("Il'nur", 37); // при подключении класса с пространства имен, необходимо указать директорию
echo $person1->getPerson();

echo "<br>";

$house1 = new House("Johndoeroad", 12);
echo $house1->getAddress();

?>
</body>
</html>