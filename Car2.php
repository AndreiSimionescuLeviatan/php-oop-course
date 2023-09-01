<?php

class Car2
{
    private $color='red';
    private $weight=2000;

    public function __construct($color, $weight)
    {
        $this->color=$color;
        $this->weight=$weight;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function __destruct()
    {
        echo 'I am destroyed: '.$this->color.PHP_EOL;
    }
}

$myCar=new Car2('green',2600);
$myCar2=new Car2('white',1800);
echo $myCar->getColor().PHP_EOL;
echo $myCar2->getColor().PHP_EOL;

unset($myCar2);
