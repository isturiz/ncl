<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ncl';

try {
  $connection = mysqli_connect($server, $username, $password, $database);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
} 

?>