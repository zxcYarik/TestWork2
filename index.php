<?php

require_once 'vendor/autoload.php';

use Local\Repositories\ProductRepository;

require 'db.php';

$repository = new ProductRepository($pdo);

echo "Товары из базы, отсортированные по sort:<br>";
$productsSortedBySort = $repository->getProductsSortedBySort();
foreach ($productsSortedBySort as $product) {
    echo "ID: {$product->id}, Code: {$product->code}, Name: {$product->name}, Sort: {$product->sort}<br>";
}

echo "<br>Товары из базы, отсортированные по имени:<br>";
$productsSortedByName = $repository->getProductsSortedByName();
foreach ($productsSortedByName as $product) {
    echo "ID: {$product->id}, Code: {$product->code}, Name: {$product->name}, Sort: {$product->sort}<br>";
}
