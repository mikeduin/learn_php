<?php

// methods are just functions that live inside of a class, and are set the same way as functions
// all functions, like properties, can have visibility of public, protected, or private

class Person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName = "Michael Stephen";
    public $lastName = "Duin";
    public $yearBorn = 1985;
    
    public function getFirstName(){
        return $this->firstName;
    };
    
    public function setFirstName($tempName){
        $this->firstName = $tempName;
    };
}

$myObject = new Person();