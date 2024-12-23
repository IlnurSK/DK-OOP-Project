<?php
class Person
{
    // Свойства
    private $name;
    private $eyeColor;
    private $age;

    // Создание статического свойства
    public static $drinkingAge = 21;

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

   // Создание статического метода
    public static function setDrinkingAge($newDA)
    {
        self::$drinkingAge = $newDA;
    }
    
    // Получение статических свойств из обычного метода

    public function getDA()
    {
        return self::$drinkingAge;
    }

}