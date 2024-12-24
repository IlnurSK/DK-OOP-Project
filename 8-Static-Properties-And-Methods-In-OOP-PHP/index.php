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
// Статические свойства и методы в PHP

// Вызов статического свойства и метода из класса
echo Person::$drinkingAge; // статическое свойство
Person::setDrinkingAge(18); // статический метод
echo Person::$drinkingAge;

// Вызов метода получения статического свойства из экземпляра класс
$person1 = new Person("Il'nur", "Brown", 37);
echo $person1->getDA();

?>
</body>
</html>