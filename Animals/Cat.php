<?php
include './Animal.php';
class Cat extends Animal
{
    public function eat()
    {
        return "Cat eats fish";
    }
    public function makeSound()
    {
        return "Cat meow";
    }
}

$cat = new Cat();

echo $cat->eat() . '<br>';

echo $cat->makeSound();
