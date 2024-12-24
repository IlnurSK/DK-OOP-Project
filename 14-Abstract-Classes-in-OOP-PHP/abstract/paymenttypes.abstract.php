<?php

abstract class Visa // абстрактный класс определяется ключевым словом abstract
{
    public function visaPayment()
    {
        return "Perform a payment";
    }

    abstract public function getPayment(); // абстрактные функции обязательно должны быть реализованы в наследуюиых классах (как контракты в интерфейсах)
}