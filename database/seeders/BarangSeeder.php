<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        
        // Supplier 1 (id=1) - 5 barang
        for ($i = 1; $i <= 5; $i++) {
            $data[] = [
                'barang_id' => count($data) + 1,
                'kategori_id' => rand(1, 5),
                'supplier_id' => 1,
                'barang_kode' => 'BRG' . (count($data) + 1),
                'barang_nama' => 'Barang Supplier A - ' . $i,
                'harga_beli' => rand(5000, 50000),
                'harga_jual' => rand(10000, 100000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        // Supplier 2 (id=2) - 5 barang
        for ($i = 1; $i <= 5; $i++) {
            $data[] = [
                'barang_id' => count($data) + 1,
                'kategori_id' => rand(1, 5),
                'supplier_id' => 2,
                'barang_kode' => 'BRG' . (count($data) + 1),
                'barang_nama' => 'Barang Supplier B - ' . $i,
                'harga_beli' => rand(5000, 50000),
                'harga_jual' => rand(10000, 100000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        // Supplier 3 (id=3) - 5 barang
        for ($i = 1; $i <= 5; $i++) {
            $data[] = [
                'barang_id' => count($data) + 1,
                'kategori_id' => rand(1, 5),
                'supplier_id' => 3,
                'barang_kode' => 'BRG' . (count($data) + 1),
                'barang_nama' => 'Barang Supplier C - ' . $i,
                'harga_beli' => rand(5000, 50000),
                'harga_jual' => rand(10000, 100000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        DB::table('m_barang')->insert($data);
    }
}