<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama_product' => 'Product 1',
                'harga' => 20000,
                'deskripsi' => 'Ini adalah barang pertama',
                'kategori_id' => 1,
                'created_at' => now(),

            ],
            [
                'nama_product' => 'Product 2',
                'harga' => 30000,
                'deskripsi' => 'Ini adalah barang kedua',
                'kategori_id' => 1,
                'created_at' => now(),

            ],
            [
                'nama_product' => 'Product 3',
                'harga' => 40000,
                'deskripsi' => 'Ini adalah barang ketiga',
                'kategori_id' => 2,
                'created_at' => now(),
       
            ]
        ]);
    }
}
