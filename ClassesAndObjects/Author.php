<?php

class Author extends Person {
    private $penName = "Mark Twain";
    
    public function getPenName() {
        return $this->penName.PHP_EOL;
    }
    
    public function getCompleteName(){
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
    }
};
