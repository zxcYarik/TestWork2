<?php

require_once('vendor/autoload.php');
use Local\Models\Product;
use Local\Repositories\ProductRepository;

$products = array(
    new Product(1, 'P001', 'Apple', 5),
    new Product(2, 'P002', 'Banana', 2),
    new Product(3, 'P003', 'Carrot', 8),
    new Product(4, 'P004', 'Date', 1),
    new Product(5, 'P005', 'Eggplant', 4),
    new Product(6, 'P006', 'Fig', 6),
    new Product(7, 'P007', 'Grape', 3),
    new Product(8, 'P008', 'Honeydew', 7),
    new Product(9, 'P009', 'Iceberg', 10),
    new Product(10, 'P010', 'Jackfruit', 9)
);

$repository = new ProductRepository($products);

echo "Товары, отсортированные по полю sort:<br>";
$sortedBySort = $repository->getProductsSortedBySort();
$repository->printProducts($sortedBySort);

echo "<br>Товары, отсортированные по имени:<br>";
$sortedByName = $repository->getProductsSortedByName();
$repository->printProducts($sortedByName);