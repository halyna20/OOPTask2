<?php
class Horse extends Animal
{
    public $location;
    public $food;
    public $maxSpeed;
    public function makeNoise()
    {
        return print_r('Iго-го');
    }

    public function eat()
    {
        return print_r('Коник їсть');
    }
}
