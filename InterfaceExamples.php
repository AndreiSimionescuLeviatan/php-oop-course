<?php

//interface MyInterface
//{
//    public function method1();
//    public function method2();
//    const MY_CONSTANT=1;
//
//}
//
//abstract class MyClass implements MyInterface
//{
//    public function method2()
//    {
//
//    }
//}
//
//class MyClass2 extends MyClass
//{
//    public function method1()
//    {
//        // TODO: Implement method1() method.
//    }
//}

interface MyInterface
{
    public function method1();
    public function method2():string;
}

interface MyInterface2
{
    public function method2():string;

}

class MyClass implements MyInterface,MyInterface2
{

    public function method1()
    {
        // TODO: Implement method1() method.
    }

    public function method2(): string
    {
        return 1;
    }
}



$myClass = new MyClass();
echo $myClass->method2();