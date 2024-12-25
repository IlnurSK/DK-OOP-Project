<?php

// Создаем внешний автозагрузчик классов

spl_autoload_register('myAutoLoader'); // встроенная функция автозагрузки классов, принимающая в качестве аргумента пользовательскую или callback функцию

// Создаем пользовательскую функцию автозагрузки классов
function myAutoLoader($className)
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // URL адрес сайта

    if (str_contains($url, 'includes')) { // если в URL есть includes, значит мы находимся в папке includes, и путь нужно изменить
        $path = '../classes/'; // переменная с путем к папке с классами
    } else {
        $path = 'classes/'; // переменная с путем к папке с классами
    }

    $extension = '.class.php'; // расширение файлов с классами
    $fullPath = $path . $className . $extension; // полный путь к файлу класса

    // Обработчик ошибок
    if (!file_exists($fullPath)) { // проверяем существует ли такой файл, если нет возвращаем false
        return false;
    }

    include_once $fullPath;
}