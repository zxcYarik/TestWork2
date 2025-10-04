<?php
namespace Local\Models;

class Product {
    public $id;
    public $code;
    public $name;
    public $sort;

    public function __construct($id, $code, $name, $sort) {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->sort = $sort;
    }

    public function printInfo() {
        echo "ID: $this->id, Code: $this->code, Name: $this->name, Sort: $this->sort<br>";
    }
}