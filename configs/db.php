<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "present";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// $path = $_SERVER["DOCUMENT_ROOT"]; 
$path = "http://present.local/";
?>