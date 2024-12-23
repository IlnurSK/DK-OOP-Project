<?php
class Person
{
    // Свойства
    private $name;
    private $eyeColor;
    private $age;

    // Создание конструктора класса
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Методы
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    // Создание деструктора класса
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}