<?php

$user = "root";
$pass = "root";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=2CHAN', $user, $pass);
} catch (PDOException $error) {
    echo $error->getMessage();
}
// DBと接続
