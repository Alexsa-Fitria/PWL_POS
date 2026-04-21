<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detailId = 1;
        
        for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {
            // 3 barang per transaksi
            for ($j = 1; $j <= 3; $j++) {
                $barangId = rand(1, 15);
                $jumlah = rand(1, 5);
                $harga = rand(10000, 100000);
                
                $data[] = [
                    'detail_id' => $detailId++,
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => $harga,
                    'jumlah' => $jumlah,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        
        DB::table('t_penjualan_detail')->insert($data);
    }
}