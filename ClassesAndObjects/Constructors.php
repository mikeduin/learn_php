<?php

// A constructor is a method that runs right when the class is instantiated
// declare a constructor function via 'function __construct()'
// REMEMBER: When you use $this, you then refer to properties/variables without the '$'
// REMEMBER: Set default values for parameters with the equal sign

class Person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct($tempFirst = "", $tempLast = "", $tempYear = ""){
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
};

$myObject = new Person("Stephen Birchall", "Duin Sr.", 1954);
echo $myObject->getFirstName();