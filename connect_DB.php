<?php
$mysqli = new mysqli('mysql', 'P4user', 'password', 'p4database', 3306, '/var/run/mysqld/mysqld.sock');

if ($mysqli->connect_error) {
    echo "Erreur de connexion : " . $mysqli->connect_error;
    exit();
}

echo "Connexion établie !";
?>