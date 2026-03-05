<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'S001',
                'supplier_nama' => 'PT. Elektronik Jaya',
                'supplier_alamat' => 'Jl. Merdeka No. 10, Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'S002',
                'supplier_nama' => 'CV. Pangan Makmur',
                'supplier_alamat' => 'Jl. Sudirman No. 45, Bandung',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'S003',
                'supplier_nama' => 'UD. Alat Tulis Barokah',
                'supplier_alamat' => 'Jl. Diponegoro No. 12, Surabaya',
            ],
            [
                'supplier_id' => 4,
                'supplier_kode' => 'S004',
                'supplier_nama' => 'PT. Sehat Medika',
                'supplier_alamat' => 'Jl. Gatot Subroto No. 8, Semarang',
            ],
            [
                'supplier_id' => 5,
                'supplier_kode' => 'S005',
                'supplier_nama' => 'Toko Perabot Modern',
                'supplier_alamat' => 'Jl. Ahmad Yani No. 100, Malang',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
