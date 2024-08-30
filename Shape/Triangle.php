<?php 
include './Shape.php';
class Triangle extends Shape 
{
    public $base;
    public $height;

    public function __construct($base ,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}
$shape1 = new Triangle(10 , 5);

echo "Area of Triangle: ". $shape1->calculateArea();
