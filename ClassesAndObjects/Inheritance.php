<?php

// Inheritance allows one class to inherit methods and properties of another, a la child/parent
// When declaring a class, use 'extends' to inherit from another class

class Person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct($tempFirst = "", $tempLast = "", $tempYear = ""){
        echo "Person Constructor".PHP_EOL;
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
    
    public function getFullName(){
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
};

class Author extends Person {
    public $penName = "Mark Twain";
    
    public function getPenName() {
        return $this->penName.PHP_EOL;
    }
    
    public function getFullName(){
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
};

$myAuthor = new Author("Stephen Birchall", "Duin Sr.", 1954);
// This prints 'Person Constructor'; since the Author class does not have a Constructor, it inherits
// the Person class's constructor

echo $myAuthor->getFullName();