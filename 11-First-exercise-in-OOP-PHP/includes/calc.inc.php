<?php

// Логика выполнения скрипта используя ООП

declare(strict_types=1);
include 'class-autoload.inc.php'; // подключаем автозагрузчик классов

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

// Проверка деления на ноль
if ($oper == 'div' && (int)$num2 === 0) {
    echo "Error!: Division by Zero!";
    die();
}

$calc = new Calc($oper, (int)$num1, (int)$num2);

try {
    echo $calc->calculator();
} catch (TypeError $error) {
    echo "Error!: " . $error->getMessage();
}
