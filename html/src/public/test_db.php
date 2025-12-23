<?php
$host = 'db'; 
$user = 'root';
$pass = 'root';
$db   = 'myapp';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<h1>✅ Database Connection Successful!</h1>";
    echo "<p>Connected to MySQL 9.0 using Docker.</p>";
} catch (PDOException $e) {
    echo "<h1>❌ Connection Failed</h1>";
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
