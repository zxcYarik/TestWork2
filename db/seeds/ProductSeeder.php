<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ProductSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
                $data = [
            ['code' => 'P001', 'name' => 'Apple', 'sort' => 5],
            ['code' => 'P002', 'name' => 'Banana', 'sort' => 2],
            ['code' => 'P003', 'name' => 'Carrot', 'sort' => 8],
            ['code' => 'P004', 'name' => 'Date', 'sort' => 1],
            ['code' => 'P005', 'name' => 'Eggplant', 'sort' => 4],
            ['code' => 'P006', 'name' => 'Fig', 'sort' => 6],
            ['code' => 'P007', 'name' => 'Grape', 'sort' => 3],
            ['code' => 'P008', 'name' => 'Honeydew', 'sort' => 7],
            ['code' => 'P009', 'name' => 'Iceberg', 'sort' => 10],
            ['code' => 'P010', 'name' => 'Jackfruit', 'sort' => 9],
        ];

        $this->table('product')->insert($data)->saveData();
    }
}
