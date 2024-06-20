<?php
$servername = "localhost";
$username = "root";
$password = "almoussa";
$dbname = "ruhrpoint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['message' => 'Connection failed: ' . $conn->connect_error]);
    exit();
}


?>