<?php

class Person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName = "Michael Stephen";
    public $lastName = "Duin";
    public $yearBorn = 1985;
}

$myObject = new Person();

// Use scope resolution operator (::) to access constants within a class

echo $myObject::AVG_LIFE_SPAN."\n";

// Can also access without using object variable and just using name of class

echo Person::AVG_LIFE_SPAN;