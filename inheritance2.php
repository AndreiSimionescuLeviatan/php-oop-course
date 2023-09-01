<?php


class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello()
    {
        return "Hello from person";
    }
}

class Employee extends Person
{
    private $salary;

    /**
     * @param $salary
     */
    public function __construct($name,$age,$phone,$salary)
    {
        parent::__construct($name,$age,$phone);
        $this->salary=$salary;
    }

    public function hello()
    {
        return "I am employee";
    }

}

class Student extends Person
{
    public $studentNo;

    public function __construct($name, $age, $phone,$studentNo)
    {
        parent::__construct($name, $age, $phone);
        $this->studentNo=$studentNo;
    }
}

    $employee = new Employee('John',27, '123456','213123');
    $student = new Student('John', 25, '123456', '124141');

    echo $student->hello();