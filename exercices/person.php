<?php

class Person{
    public string $name;
    public int $age;

    public function __construct($name, $age) {
        $this->name= $name;
        $this->age= $age;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
}

$jonathan = new Person("jonathan", 30);
echo $jonathan->name;
echo " ";
echo $jonathan->age;
