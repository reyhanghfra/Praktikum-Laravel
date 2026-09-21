<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Kelas Product sudah di-import di sini

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([ // Cukup panggil Product secara langsung
            'category_id' => 1,
            'code' => 'PRD001',
            'name' => 'Beras 5kg',
            'unit' => 'pcs',
            'price' => 75000,
            'stock' => 10,
        ]);
    }
}