<?php

class Calc
{
    // Свойства калькулятора
    public $operator; // Математический оператор
    public $num1; // Первое число
    public $num2; // Второе число

    // Конструктор калькулятора
    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // Фукнция вычисления
    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
                echo "Error!";
                break;
        }
    }
}
