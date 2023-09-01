<?php

class A
{
    public $var1=10;
    public function hello()
    {
        echo "Hello from calss A";
    }
}

trait TraitA
{
    public function hello()
    {
        echo "Hello from calss A" .$this->var1;
    }
}

class B extends A
{
    use TraitA;
}

$a=new B();
$a->hello();