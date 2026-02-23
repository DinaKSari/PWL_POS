<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'LP01', 'barang_nama' => 'Laptop ASUS', 'harga_beli' => 8000000, 'harga_jual' => 9500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'HP01', 'barang_nama' => 'iPhone 13', 'harga_beli' => 10000000, 'harga_jual' => 12000000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'MN01', 'barang_nama' => 'Kopi Kenangan', 'harga_beli' => 15000, 'harga_jual' => 25000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'MK01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'RT01', 'barang_nama' => 'Rice Cooker', 'harga_beli' => 300000, 'harga_jual' => 450000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'RT02', 'barang_nama' => 'Blender', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'KS01', 'barang_nama' => 'Vitamin C', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'KS02', 'barang_nama' => 'Masker Medis', 'harga_beli' => 20000, 'harga_jual' => 35000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'AT01', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'AT02', 'barang_nama' => 'Pulpen Pilot', 'harga_beli' => 2000, 'harga_jual' => 4000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
