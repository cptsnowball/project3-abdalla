<?php

$dbPassword = "PHPFun";
$dbUserName = "PHPFun";
$dbServer = "localhost";
$dbName = "project3";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Datebase Connection Failed. Reason: ".$connection->connect_errno);
}

?>