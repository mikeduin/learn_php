<?php

// Prepared statements allow for outside user input to safely be used inside of a query
// The idea is to help prevent any kind of SQL-Injection attacks

$dbPassword = "mysqlpassword";
$dbUserName = "mikeduin";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

$tempFirstName = 'Lucy Maud';

// This WHERE clause returns all authors whose first_name matches a specific word
// This specific word would be coming from user input, such as a search box on a website
// The '?' at the end of the select statement is a placeholder, letting the script know that we'll be 
// sending the value later
$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";
// We use the 'prepare' method here to let PHP know that we'll be sending our values later
$statementObj = $connection->prepare($query);

// We use the method 'bind_param' with our statement object in order to send the values later
// 'bind_param' can take as many values as needed to correspond with the placeholders in our query
// The first parameter is a string equivalent to the value types we are passing in
// For instance, we use an 's' to indicate that the first value we are passing in will be a string
// Example: bind_param("sdi", $stringVar, $floatVar, $intVar) would indicate string, decimal, and integer
// Values passed in after the type string MUST be variables

$statementObj->bind_param("s", $tempFirstName);
// The execute() method executes our query, taking our parameters and inserting them into the query string at appropriate locations
$statementObj->execute();

// We then bind results to parameters. These are variables that coincide with values the query is returning
$statementObj->bind_result($firstName, $lastName, $penName);
// We then store results to bind_result variables by calling store_result method
$statementObj->store_result();

if ($statementObj->num_rows>0)
{
    while ($statementObj->fetch())
    {
        echo $firstName." ".$lastName." (".$penName.")".PHP_EOL;
    }
}

$statementObj->close();
$connection->close();