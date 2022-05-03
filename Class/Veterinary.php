<?php
class Veterinary
{
    public function treatAnimal(Animal $animal)
    {
        print_r($animal->food);
        echo '<br/>';
        print_r($animal->location);
        echo '<br/>';
    }
}
