<?php
$user = "root";
$pass = "root";
// DBと接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=2CHAN', $user, $pass);
} catch (PDOException $error) {
    echo $error->getMessage();
}
