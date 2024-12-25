<?php
// Оператор области видимости (::)

// Образец первого класса
class FirstClass {
    // Свойства
    const EXAMPLE = "Ты не можешь изменить это!";

    // Методы
    public static function test()
    {
        $testing = "This is a test!";
        return $testing;
    }
}

// $a = FirstClass::EXAMPLE;
// echo $a;

//$a = FirstClass::test();
//echo $a;

// Образец второго класса
class SecondClass extends FirstClass {
    // Свойства
    public static $staticProperty = "Статическое свойство!";

    // Методы
    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

 $b = SecondClass::anotherTest();
 echo $b;