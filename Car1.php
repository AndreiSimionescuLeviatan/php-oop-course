<?php

class Car1
{
    public $color='red';
    public $weight;
    public $year;
}

$car=new Car1();
//$car2=&$car;

$car2= clone $car;
$car2->color = 'green';

var_dump($car2);
var_dump($car);
