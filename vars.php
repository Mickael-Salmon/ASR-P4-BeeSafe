<?php
$servername = "db";
$username = 'P4user';
$password = 'password';
$dbname = "p4database";
$port = 3306;

// Test de connexion (optionnel ici, mais utile pour le débogage)
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to the database.";
}
?>
