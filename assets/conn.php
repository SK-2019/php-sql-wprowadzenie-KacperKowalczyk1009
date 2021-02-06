<?php
$host = 'remotemysql.com';
$db = 'Qp5kr9aFAZ';
$user = 'Qp5kr9aFAZ';
$pass = 'nLj0fYkQ76';

// Create connection
$conn = new mysqli('remotemysql.com','Qp5kr9aFAZ','Qp5kr9aFAZ','nLj0fYkQ76');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
