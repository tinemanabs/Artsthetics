<?php 

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Artsthetics";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . $conn->connection_error);
}
