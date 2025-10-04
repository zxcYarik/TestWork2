<?php

require_once('vendor/autoload.php');

require 'db.php';

echo "Товары, отсортированные по полю sort:<br>";
$stmt = $pdo->query('SELECT * FROM product ORDER BY sort');
$products = $stmt->fetchAll();
foreach ($products as $p) {
    echo "ID: {$p['id']}, Code: {$p['code']}, Name: {$p['name']}, Sort: {$p['sort']}<br>";
}

echo "<br>Товары, отсортированные по имени:<br>";
$stmt = $pdo->query('SELECT * FROM product ORDER BY name');
$products = $stmt->fetchAll();
foreach ($products as $p) {
    echo "ID: {$p['id']}, Code: {$p['code']}, Name: {$p['name']}, Sort: {$p['sort']}<br>";
}