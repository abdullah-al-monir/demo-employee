<?php
// Database configuration
$host = "localhost"; // Hostname
$username = "your_username"; // Database username
$password = "your_password"; // Database password
$database = "your_database"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

