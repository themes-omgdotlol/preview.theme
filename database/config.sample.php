<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'themes';

$base_url = 'http://localhost:3000';
?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
