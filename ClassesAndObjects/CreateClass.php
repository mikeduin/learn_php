<?php

// A class is a container. Something we can put stuff in and retrieve stuff from.
// Classes are beneficial for code reuse, maintainability, and encapsulation (putting like data into a single component)

// Every class will have some type of variable used throughout the class, called properties or 'member variables'
// All property variables start with the words public, private, or protected
// The idea of a public property or variable is that it can be accessed outside of the class through
// our object variable, or by other classes

class Person {
    public $firstName = "Michael Stephen";
    public $lastName = "Duin";
    public $yearBorn = 1985;
}

// The default values of a property cannot be acted upon (such as equation or formula) ... they must be constant values

// To declare an instance of a class, use a variable
// When you declare a new instance of a class, you are declaring an object
// A new instance of a class is a template of the class we're referring to

$myObject = new Person();