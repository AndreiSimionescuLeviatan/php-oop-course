<?php

class Car
{
    private $color='red';
    public $weight;
    private $year;

    private $availableColors=['red','green','blue','white'];

    function setYear($year)
    {
        $this->year=$year;
    }

    public function setColor($color)
    {
        if(in_array($color,$this->availableColors))
        {
            $this->color=$color;
        }
    }

    public function getColor()
    {
        return $this->color;
    }

    function getYear()
    {
        return $this->year;
    }

}

$myCar = new Car();
$myCar->setColor('white');
//$myCar->setYear(2010);
//echo $myCar->getYear();
echo $myCar->getColor();

