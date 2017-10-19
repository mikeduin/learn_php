<?php

$dbPassword = "mysqlpassword";
$dbUserName = "mikeduin";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

// set up your connection object variable with a new instance of the mysqli class
// The mysqli class can take six optional parameters ...
// mysqli::__construct([string $host] [,string $username] [,string $password] [,string $dbname] [,string $port] [,string $socket])

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

print_r($connection);

if ($connection->connect_errno) {
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}