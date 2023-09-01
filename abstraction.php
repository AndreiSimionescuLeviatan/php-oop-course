<?php

abstract class Shape
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }


    abstract public function getArea():float;

    public function getColor()
    {
        return $this->color;
    }

}

class Triangle extends Shape
{
    public function getArea(): float
    {
        return 1;
    }

}

class Circle extends Shape
{
    public $radius;

    public function __construct($color,$radius)
    {
        parent::__construct($color);
        $this->radius=$radius;
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * 3.14;
    }
}

class Reactngle extends Shape
{
    public $width;
    public $length;

    public function __construct($color,$width,$length)
    {
        parent::__construct($color);
        $this->width=$width;
        $this->length=$length;
    }
    public function getArea(): float
    {
        return $this->width*$this->length;
    }
}

$t= new Reactngle('red',10,5);
$circle = new Circle('blue',5);
echo $t->getArea();
echo $circle->getArea();
