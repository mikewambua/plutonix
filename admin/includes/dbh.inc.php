<?php
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "plutonix_users";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connect failed: ". mysqli_connect_error());
}
