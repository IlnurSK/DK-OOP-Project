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

// Видимость и Наследование в ООП

// Создаем класс в includes/person.inc.php

    require_once 'includes/person.inc.php';

    $pet01 = new Person();

    echo $pet01->first;

?>
</body>
</html>



