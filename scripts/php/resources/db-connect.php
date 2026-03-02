<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epicurean_themes";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection successful";
} catch(PDOException $error) {
  echo "Connection failed: {$error->getMessage()}";
}


?>