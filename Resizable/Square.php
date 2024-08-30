<?php
include './Resizable.php';
class Square implements Resizable
{
    public $sideLength;
    
    public function __construct($sideLength)
    {
        $this->sideLength = $sideLength;
    }
    
    public function calculateArea()
    {
       return $this->sideLength * $this->sideLength;
    }

    public function resize($newLength)
    {
        $this->sideLength = $newLength;
        return 'The new size of the squre is :'. $this->calculateArea();
    }
}

$squer1 = new Square(5);

echo "Area of Square1 is : " . $squer1->calculateArea() . "<br>";

echo $squer1->resize(10);
