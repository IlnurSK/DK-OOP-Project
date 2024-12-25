<?php

// Анонимные классы в PHP

// Обычный класс

include_once "classes/simpleclass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();

// Анонимный класс

$newObj = new class() {
    public function helloWorld()
    {
        echo "Здарова Мир!";
    }
};

$newObj->helloWorld();
