<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'user_id' => rand(1, 3),
                'supplier_id' => rand(1, 3),
                'stok_tanggal' => rand(1, 30),
                'stok_jumlah' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        DB::table('t_stok')->insert($data);
    }
}