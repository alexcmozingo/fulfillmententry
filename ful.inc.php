<?php
    include_once 'dbh.inc.php';

$name = $_POST['name'];
$value = $_POST['value'];
$quantity = $_POST['quantity'];

$dbServername = "107.180.28.163";
$dbUsername = "squn2limpy97";
$dbPassword = "Pr0d1gy!";
$dbName = "production";


$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);


$sql = "INSERT INTO production (name, value, quantity) VALUES ('$name', '$value', '$quantity');";
mysqli_query($conn, $sql);
