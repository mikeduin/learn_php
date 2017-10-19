<?php

$dbPassword = "mysqlpassword";
$dbUserName = "mikeduin";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

//$query = "DELETE FROM Authors WHERE id = 4";
//$query = "UPDATE Authors SET pen_name = 'L. M. Montgomery' WHERE id = 2";
//$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Arthur Ignatius Conan', 'Doyle', 'Sir Arthur Ignatius Conan Doyle')";
//$query = "UPDATE Authors SET pen_name = 'Sir Arthur Conan Doyle' WHERE id = 7";
$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('John Ronald Reuel', 'Tolkien', 'J.R.R. Tolkien')";

$connection->query($query);

echo "Newly Created Author Id: ".$connection->insert_id;

// When a new record is inserted, the ID that was auto-incremented on our primary key column is saved
// to the insert_id property in our connection object variable

$connection->close();
