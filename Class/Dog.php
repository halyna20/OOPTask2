<?php
class Dog extends Animal
{
    public $location;
    public $food;
    public $owner;
    public function makeNoise()
    {
        return print_r('Гав гав');
    }

    public function eat()
    {
        return print_r('Собака їсть');
    }
}
