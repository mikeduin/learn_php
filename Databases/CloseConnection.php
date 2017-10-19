<?php

$dbPassword = "mysqlpassword";
$dbUserName = "mikeduin";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

// Connections automatically close on the completion of any script but it's good practice to close them manually
$connection->close();
