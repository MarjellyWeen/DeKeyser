<?php

//params to connect to a database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "paniflower";

//connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn){
    die("Database connection failed");
}

?>