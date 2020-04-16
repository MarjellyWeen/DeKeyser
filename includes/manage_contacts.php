<?php
require 'database.php';

$company_id = $_POST['company_id'];
$name = $_POST['name'];
$role = $_POST['role'];
$code = $_POST['code'];

$contactlist = "http://localhost/paniflower/contacts.php";


$query = "INSERT INTO `contacts` VALUES (NULL, '$company_id', '$name', '$role', '$code')";

if (mysqli_query($conn, $query)){
    echo "record toegevoegd";
    echo "Back to the previous page <li><a href=$contactlist>Contacts list</a></li>";
} else{
    echo mysqli_error($conn);
};
?>