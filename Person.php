<?php

class Person
{
    private $phone=123456;
    private $name="Ionut";

    static $counter=0;

    public function __construct($phone, $name)
    {
        $this->phone = $phone;
        $this->name = $name;
        self::$counter++;
    }

    public function __destructstruct()
    {
        echo '__denstruct is called'.PHP_EOL;
    }

    public function __toString()
    {
        return "Name: $this->name. Phone:$this->phone";
    }

    public function __get($propname)
    {
        if($propname==='username')
        {
            return $this->name;
        }
        return "Property" . $propname ."does not exist";
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if($name==='getMobilePhone')
        {
            return $this->getPhone();
        }
        if($name==='setMobilePhone')
        {
            call_user_func_array([$this,'setPhone'],$arguments);
            $this->setPhone($arguments[0]);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        echo $name . "static method was called";
    }


    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone=$phone;
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return "Called";
    }

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
        unset($this->phone);
        return ['name'];
    }

    public function __clone()
    {
        self::$counter++;
    }

    public function __wakeup()
    {
        self::$counter++;
    }


}

//$p=new Person();
//echo $p->getMobilePhone().PHP_EOL;
//$p->setMobilePhone(54321);
//echo $p->getMobilePhone();
//echo $p->username;
//Person::hello();

$p=new Person('Jane','123456');
//$serialized=serialize($p);
//$newperson=unserialize($serialized);
//var_dump($newperson);
//var_dump($p);
$newPerson= clone $p;
echo Person::$counter;

