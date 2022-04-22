<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CreateWhinventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whinventory')->insert([
            ['item_no' => 'ATK-0001', 'period' => '202204', 'saldo_awal' => 0, 'in' => 17, 'out' => 0, 'saldo_akhir' => 17 ],
            ['item_no' => 'ATK-0002', 'period' => '202204', 'saldo_awal' => 0, 'in' => 32, 'out' => 0, 'saldo_akhir' => 32 ],
            ['item_no' => 'ATK-0003', 'period' => '202204', 'saldo_awal' => 0, 'in' => 9, 'out' => 0, 'saldo_akhir' => 9 ],
            ['item_no' => 'ATK-0004', 'period' => '202204', 'saldo_awal' => 0, 'in' => 5, 'out' => 0, 'saldo_akhir' => 5 ],
            ['item_no' => 'ATK-0005', 'period' => '202204', 'saldo_awal' => 0, 'in' => 7, 'out' => 0, 'saldo_akhir' => 7 ],
            ['item_no' => 'ATK-0006', 'period' => '202204', 'saldo_awal' => 0, 'in' => 10, 'out' => 0, 'saldo_akhir' => 10 ],
            ['item_no' => 'ATK-0007', 'period' => '202204', 'saldo_awal' => 0, 'in' => 3, 'out' => 0, 'saldo_akhir' => 3 ],
            ['item_no' => 'ATK-0008', 'period' => '202204', 'saldo_awal' => 0, 'in' => 9, 'out' => 9, 'saldo_akhir' => 0 ],
            ['item_no' => 'ATK-0009', 'period' => '202204', 'saldo_awal' => 0, 'in' => 12, 'out' => 0, 'saldo_akhir' => 12 ],
            ['item_no' => 'ATK-0010', 'period' => '202204', 'saldo_awal' => 0, 'in' => 20, 'out' => 0, 'saldo_akhir' => 20 ],
        ]);
    }
}
