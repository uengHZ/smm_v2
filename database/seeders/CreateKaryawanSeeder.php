<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CreateKaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawan')->insert([
            ['nik' => '001.059.00588', 'nama' => 'AAM SUHERMAN', 'departemen' => 'CALLENDER', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00589', 'nama' => 'WISNU', 'departemen' => 'EXPORT IMPORT', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00590', 'nama' => 'ADHIE', 'departemen' => 'TC', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00591', 'nama' => 'UENG HERNAMA', 'departemen' => 'IT', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00592', 'nama' => 'WALUYO', 'departemen' => 'IT SPV', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00593', 'nama' => 'RAKA S', 'departemen' => 'PURCHASING', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00594', 'nama' => 'FAISAL', 'departemen' => 'WAREHOUSE', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00595', 'nama' => 'ANDIKA', 'departemen' => 'QC', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00596', 'nama' => 'MARY SHAY', 'departemen' => 'ASEMBLING', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['nik' => '001.059.00597', 'nama' => 'BUDI S', 'departemen' => 'HR', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
        ]);
    }
}
