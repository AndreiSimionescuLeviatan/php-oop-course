<?php

class Car3
{
    private $color='red';
    private $weight=2000;
    static private $availableColors=['red','green','blue','white'];

    static $counter=0;
    public $myCounter=0;

    public function __construct()
    {
        $this->myCounter++;
        self::$counter++;
    }

    public static function getAvailableColors()
    {
        return self::$availableColors;
    }
}

//$myCar = new Car3();
//echo Car3::$counter.PHP_EOL.$myCar->myCounter;
//$myCar = new Car3();
//echo Car3::$counter.PHP_EOL.$myCar->myCounter;