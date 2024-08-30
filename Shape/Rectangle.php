<?php
include './Shape.php';

class Rectangle extends Shape
{
    public $length;
    public $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}

$rectangle = new Rectangle(5, 10);

echo "Rectangle area: " . $rectangle->calculateArea();