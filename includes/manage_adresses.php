<?php
require 'database.php';

$company_id = $_POST['company_id'];
$adress = $_POST['adress'];
$type = $_POST['type'];

$adresslist = "http://localhost/paniflower/adresses.php";


$query = "INSERT INTO `adresses` VALUES (NULL, '$company_id', '$adress', '$type')";

if (mysqli_query($conn, $query)){
    echo "record toegevoegd <br>";
    echo "Back to the previous page <li><a href=$adresslist>Adress list</a></li>";
} else{
    echo mysqli_error($conn);
};
?>