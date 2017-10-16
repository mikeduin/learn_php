<?php

class Person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName = "Michael Stephen";
    public $lastName = "Duin";
    public $yearBorn = 1985;
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
};

$myObject = new Person();

$myObject->setFirstName('Michael');
echo $myObject->getFirstName();