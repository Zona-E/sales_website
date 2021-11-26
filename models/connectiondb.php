<?php

$server = 'localhost';
$username = 'root';
$password = 'eliasgarcia321';
$database = 'zona.e_store';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}
