<?php

namespace Local\Models;

class Product
{
    public int $id;
    public ?string $code;
    public ?string $name;
    public ?int $sort;

    public function __construct(int $id, ?string $code, ?string $name, ?int $sort)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->sort = $sort;
    }
}