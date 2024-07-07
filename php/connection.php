<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diet_and_health"; // Changed to correct syntax and added underscore

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); // Corrected variable names

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Corrected syntax
} else {
    // echo "Connected successfully"; // Corrected syntax
}
?>