<?php
namespace Local\Repositories;

use PDO;
use Local\Models\Product;

class ProductRepository {
    private array $products = [];

    public function __construct(PDO $pdo) {
        $this->loadProductsFromDatabase($pdo);
    }

    private function loadProductsFromDatabase(PDO $pdo): void {
        $stmt = $pdo->query("SELECT * FROM product");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            $this->products[] = new Product(
                $row['id'],
                $row['code'],
                $row['name'],
                $row['sort']
            );
        }
    }

    public function getProductsSortedBySort(): array {
        $sorted = $this->products;
        usort($sorted, function(Product $a, Product $b) {
            return $a->sort <=> $b->sort;
        });
        return $sorted;
    }

    public function getProductsSortedByName(): array {
        $sorted = $this->products;
        usort($sorted, function(Product $a, Product $b) {
            return strcmp($a->name, $b->name);
        });
        return $sorted;
    }

    public function getAllProducts(): array {
        return $this->products;
    }
}
