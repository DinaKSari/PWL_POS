<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'ELC', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 2, 'kategori_kode' => 'FNB', 'kategori_nama' => 'Makanan & Minuman'],
            ['kategori_id' => 3, 'kategori_kode' => 'HMT', 'kategori_nama' => 'Peralatan Rumah'],
            ['kategori_id' => 4, 'kategori_kode' => 'MDK', 'kategori_nama' => 'Kesehatan'],
            ['kategori_id' => 5, 'kategori_kode' => 'STY', 'kategori_nama' => 'Alat Tulis'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
