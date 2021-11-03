<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '123');
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}

var_dump($pdo);