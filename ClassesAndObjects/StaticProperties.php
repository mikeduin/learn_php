<?php

// Static properties must have a value set
// Static methods must be self-contained, meaning they cannot rely on other properties/methods within
// the class, UNLESS those properties/methods are also static
// The scope resolution operator (::) is used to access static properties/methods within a class

class Person {
    const AVG_LIFE_SPAN = 79;
    
    private $firstName;
    private $lastName;
    private $yearBorn;
    
    function __construct($tempFirst = "", $tempLast = "", $tempYear = ""){
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }
    
    public function getFirstName(){
        return $this->firstName.PHP_EOL;
    }
    
    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
    
    protected function getFullName(){
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
};

class Author extends Person {
    public static $centuryPopular = "19th";
    
    private $penName = "Mark Twain";
    
    public function getPenName() {
        return $this->penName.PHP_EOL;
    }
    
    public function getCompleteName(){
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
    }
    
    public static function getCenturyAuthorWasPopular(){
        return self::$centuryPopular;
    }
};

//echo Author::$centuryPopular;

echo Author::getCenturyAuthorWasPopular();
