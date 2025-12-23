<?php
$host = 'doker-php-db-1'; 
$user = 'root';
$pass = 'root';
$db   = 'myapp';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<h1>✅ Database Connection Successful!</h1>";
} catch (PDOException $e) {
    echo "<h1>❌ Connection Failed</h1>" . $e->getMessage();
}
