<?php
$host = 'remotemysql.com'
$db = 'Qp5kr9aFAZ'
$user = 'Qp5kr9aFAZ'
$pass = 'nLj0fYkQ76'

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
