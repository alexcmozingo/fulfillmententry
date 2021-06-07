<?php
    include_once 'dbh.inc.php';

$name = $_POST['name'];
$value = $_POST['value'];
$quantity = $_POST['quantity'];

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "prodigydisc";
$dbName = "productionlog";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);


$sql = "INSERT INTO production (name, value, quantity) VALUES ('$name', '$value', '$quantity');";
mysqli_query($conn, $sql);



