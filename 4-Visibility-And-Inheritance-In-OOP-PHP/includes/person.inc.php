<?php

class Person
{
    public $first = "Daniel";
    private $last = "Nielsen";
    private $age = "28";

//    public function owner()
//    {
//        $a = $this->first;
//        return $a;
//    }
}

class Pet extends Person
{
    public function owner()
    {
//        $a = "Hi there!";
//        $a = $this->first;
        $a = $this->first;
        return $a;
    }
}