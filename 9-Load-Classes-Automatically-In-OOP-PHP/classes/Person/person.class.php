<?php

namespace Person; // задаем пространство имен

class Person
{
    // Свойства
    private $name;
    private $age;

    // Создание конструктора класса
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Методы
    public function getPerson()
    {
        $person = $this->name . " is " . $this->age . " years old!";
        return $person;
    }
}

