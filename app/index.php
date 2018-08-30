<?php
echo "hello k.somchai tag:6.0";

echo "<pre>";
echo "======================================================================";
echo "</pre>";

echo "connecting to mysql";
echo "<pre></pre>";


$servername = getenv('DEV_DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

// $servername = "127.0.0.1";
// $username = "proxyuser";
// $password = "[Z8rLQgTRx7JENB5AxGSTT5HZ";

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
