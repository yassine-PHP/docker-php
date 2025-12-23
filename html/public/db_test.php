<?php
$host = 'db'; 
$user = 'root';
$pass = 'root';
$db   = 'myapp';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<h1>✅ Database Connected Successfully!</h1>";
} catch (PDOException $e) {
    echo "<h1>⏳ Database is starting...</h1>";
    echo "<p>Please wait 20 seconds and refresh. MySQL takes a moment to initialize the first time.</p>";
}
