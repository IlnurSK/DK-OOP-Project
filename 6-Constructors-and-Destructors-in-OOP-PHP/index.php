<?php
// Подключаем класс
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
// Конструкторы и деструкторы классов в PHP
$person1 = new Person("Il'nur", "Blue", 28);

//echo $person1->name;
//echo $person1->eyeColor;
//echo $person1->age;
//$person1->setName("Daniel");
//echo $person1->name;

echo $person1->getName();
echo $person1->name; // fatal error

?>
</body>
</html>