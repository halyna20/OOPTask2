<?php
class Animal
{
    public $food;
    public $location;

    public function __construct($food, $location)
    {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNoise()
    {
        return print_r('Така тварина спить');
    }

    public function eat()
    {
        return print_r('Ця тварина не голодна');
    }

    public function sleep()
    {
        return print_r('Ця тварина спить');
    }
}
