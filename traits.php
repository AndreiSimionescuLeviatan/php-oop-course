<?php

trait MyTrait{
   abstract public function fly();
    public function hello()
    {
        echo "Hello. I can fly";
    }
}

trait EngineTrait{
    public function hello()
    {
        echo "I have am engine";
    }
}
class Plain
{
    use MyTrait, EngineTrait{
        MyTrait::hello insteadof EngineTrait;
        EngineTrait::hello as engineHello;
    }

    public function fly()
    {
        echo "I am flying at 800 km/h speed";
    }
}

//class Helicopter
//{
//    use MyTrait,EngineTrait;
//
//    public function fly()
//    {
//        echo "I am flying at 300 km/h speed";
//    }
//}


//class Car
//{
//    use EngineTrait;
//}

$plain = new Plain();
//$helicopter = new Helicopter();
$plain->fly();
//$helicopter->fly();
$plain->engineHello();