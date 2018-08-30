<?php
echo "hello k.somchai";

echo "<pre>";
echo "======================================================================";
echo "</pre>";

echo "connecting to mysql";
echo "<pre></pre>";


$servername = getenv('DEV_DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

echo $servername;
echo "<pre></pre>";
echo $username;
echo "<pre></pre>";
echo $password;
echo "<pre></pre>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
