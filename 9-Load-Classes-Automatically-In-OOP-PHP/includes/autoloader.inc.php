<?php

// Создаем внешний автозагрузчик классов

spl_autoload_register('myAutoLoader'); // встроенная функция автозагрузки классов, принимающая в качестве аргумента пользовательскую или callback функцию

// Создаем пользовательскую функцию автозагрузки классов
function myAutoLoader($className)
{
    $path = "classes/"; // переменная с путем к папке с классами
    $extension = ".class.php"; // расширение файлов с классами
    $fullPath = $path . $className . $extension; // полный путь к файлу класса

    // Обработчик ошибок
    if (!file_exists($fullPath)) { // проверяем существует ли такой файл, если нет возвращаем false
        return false;
    }

    include_once $fullPath;
}