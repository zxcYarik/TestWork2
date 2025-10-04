<?php

require_once 'vendor/autoload.php';

use Local\Repositories\ProductRepository;
use Local\Models\Product;

require 'db.php';

$repository = new ProductRepository($pdo);

echo "Товары, отсортированные по полю sort:<br>";
$productsBySort = $repository->getProductsSortedBySort();
foreach ($productsBySort as $product) {
    echo "ID: {$product->id}, Code: {$product->code}, Name: {$product->name}, Sort: {$product->sort}<br>";
}

echo "<br>Товары, отсортированные по имени:<br>";
$productsByName = $repository->getProductsSortedByName();
foreach ($productsByName as $product) {
    echo "ID: {$product->id}, Code: {$product->code}, Name: {$product->name}, Sort: {$product->sort}<br>";
}