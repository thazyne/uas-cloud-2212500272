<?php
$servername = getenv('MYSQL_HOST') ?: 'db'; // gunakan service name dari docker-compose
$username = getenv('MYSQL_USER') ?: 'root';
$password = getenv('MYSQL_PASSWORD') ?: 'root';
$dbname = getenv('MYSQL_DATABASE') ?: 'uas_2212500272';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


