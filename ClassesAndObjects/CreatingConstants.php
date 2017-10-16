<?php

// to create a constant in a class, use 'const'
// unlike properties, a constants value can be a mathematical equation, but cannot use any defined
// properties in that equation

class Person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName = "Michael Stephen";
    public $lastName = "Duin";
    public $yearBorn = 1985;
}

$myObject = new Person();
