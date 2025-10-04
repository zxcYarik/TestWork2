<?php
namespace Local\Repositories;

class ProductRepository {
    private $products;

    public function __construct($products) {
        $this->products = $products;
    }

    public function getProductsSortedBySort() {
        $sorted = $this->products;
        usort($sorted, array($this, "compareBySort"));
        return $sorted;
    }

    public function getProductsSortedByName() {
        $sorted = $this->products;
        usort($sorted, array($this, "compareByName"));
        return $sorted;
    }

    private function compareBySort($a, $b) {
        if ($a->sort == $b->sort) {
            return 0;
        }
        return ($a->sort < $b->sort) ? -1 : 1;
    }

    private function compareByName($a, $b) {
        return strcmp($a->name, $b->name);
    }

    public function printProducts($products) {
        foreach ($products as $product) {
            $product->printInfo();
        }
    }
}