<?php
include './Animal.php';
class Dog extends Animal
{
    public function eat()
    {
        return "Dog eats food";
    }
    public function makeSound()
    {
        return "Dog barks";
    }
}

$dog = new Dog();

echo $dog->eat() . '<br>';

echo $dog->makeSound();
