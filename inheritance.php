<?php

class ParentClass
{
    public $property1='1';
    protected $property2='2';
    private $property3='3';

     const MY_CONSTANT="MY_CONSTANT";


    public function getProperty2()
    {
        return $this->property2;
    }

    public function printText(string $text)
    {
        echo $text;
    }

    public static function getConstant()
    {
        return self::MY_CONSTANT;
    }

}

class ChildClass extends ParentClass
{
    public $property1='11';
    protected $property2='22';
    const MY_CONSTANT='MY_CONSTANT';
    public function getProperty2()
    {
        $result=parent::getProperty2();
        return "Something ".$result;
    }

    public function printText(string $text)
    {
        echo $text;
    }

    public static function getConstant()
    {
        return self::MY_CONSTANT;
    }
}

$obj=new ChildClass();
//echo $obj->getProperty2();
echo ChildClass::getConstant();
