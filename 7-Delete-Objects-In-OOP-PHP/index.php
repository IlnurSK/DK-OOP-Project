<?php
// Подключаем класс
require_once 'includes/NewClass.inc.php';

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
// Удаление объектов в PHP

$object = new NewClass();
unset($object); // с помощью unset мы удаляем объект
echo $object->getProperty();



?>
</body>
</html>