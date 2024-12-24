<?php

class Person {
    // Свойства
    public $name;
    public $eyeColor;
    public $age;

    /* Методы
    Используя объявлние типов, мы можем выкидывать ошибку если используется ошибочный тип!
    Работает с:
        - class/interface name (имена классов и интерфейсов)
        - self (используются на самом классе)
        - array (массив)
        - callable (вызываемая функция)
        - bool (булевые)
        - float (числа с плавающей)
        - int (целочисленные)
        - string (строковые)
        - iterable (итируемые)
        - object (объекты)
    */

    public function setName(string $newName) // указываем явно тип передаваемых данных (string)
    {
       $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }
}