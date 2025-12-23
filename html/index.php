<?php
$host     = 'doker-php-db-1'; // CHANGED FROM localhost
$user     = 'root';
$password = 'root'; // Ensure this matches your docker-compose.yml
$database = 'myapp'; // Matches the folder 'myapp' seen in your tree

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL 9.0 on doker-php-db-1!";
?>

