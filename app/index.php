<?php
echo "php k8s deploy with mysql!";

echo "<pre>";
echo "======================================================================";
echo "</pre>";

echo "connecting to mysql";


$servername = getenv('DEV_DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
