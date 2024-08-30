<?php
include './Animal.php';
class Bird extends Animal
{
    public function eat()
    {
        return "Bird eats corn kernels";
    }
    public function makeSound()
    {
        return "Bird Squeaking";
    }
}

$bird = new Bird();

echo $bird->eat() . '<br>';

echo $bird->makeSound();
