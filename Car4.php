<?php

class Car4
{
  public $color;
  public $manufacturer;

  const MY_CONSTANT=[];

  const COLOR_RED='red';
  const MANUFACTURER_BMW='BMW';

    public function __construct($color, $manufacturer)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;
    }

}


$myCar=new Car4(Car4::COLOR_RED,Car4::MANUFACTURER_BMW);

var_dump($myCar);