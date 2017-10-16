<?php

class Person {
    public $firstName = "Michael Stephen";
    public $lastName = "Duin";
    public $yearBorn = 1985;
}

$myObject = new Person();

// To access a property within a class, use -> with the variable name and WITHOUT a $ for the property

echo $myObject->firstName."\n";

// Since it's a public property, can be overwritten by assigning it to new value

$myObject->firstName = "Stephen Birchall";

echo $myObject->firstName;