<?php

$server = 'localhost';
$username = 'id10790935_root';
$password ='123456';
$database ='id10790935_php_login_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>
