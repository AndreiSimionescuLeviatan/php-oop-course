<?php

trait Trait1{
    public function method1()
    {
        echo "foo";
    }
}

trait Trait2{
    public function method2()
    {
        echo "bar";
    }
}

trait Trait3{
    public function method3()
    {
        echo "3";
    }
}

class MyClass
{
    use Trait3;
}

$a= new MyClass();