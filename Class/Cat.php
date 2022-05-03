<?php
class Cat extends Animal
{
    public $food;
    public $location;
    public $toy;

    public function makeNoise()
    {
        return print_r('Котик спить');
    }

    public function eat()
    {
        return print_r('Котик вже поїв');
    }
}
