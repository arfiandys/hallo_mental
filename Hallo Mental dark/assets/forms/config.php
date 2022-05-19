<?php 

$server = "remotemysql.com";
$user = "IdSXfuH0Cv";
$pass = "QOXDyPzDj5";
$database = "IdSXfuH0Cv";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>