<?php

$dbPassword = "mysqlpassword";
$dbUserName = "mikeduin";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

// The SELECT query is a bit different from previous queries in that it returns results, which we want access to
$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
// We're going to save our query method to a variable, which is a mysqli result object
// This is a special kind of object with which we have access to a set of properties/methods for processing
// the results from the database
// One of the properties we are going to access is num_rows, which lets us know how many results are returned
$resultObj = $connection->query($query);

if($resultObj->num_rows > 0) 
{
    while($singleRowFromQuery = $resultObj->fetch_assoc())
    // the fetch_assoc method returns a single row of data as an associative array
    // that single row of data will then be saved to $singleRowFromQuery
    {
//        print_r($singleRowFromQuery);
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
    }
}

// You also need to close/free our resultObj variable
$resultObj->close();
$connection->close();