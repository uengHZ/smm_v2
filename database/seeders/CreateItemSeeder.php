<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CreateItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            ['item_no' => 'ATK-0001', 'item' => 'AMPLOP A COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 25000, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0002', 'item' => 'AMPLOP B COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 25200, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0003', 'item' => 'AMPLOP C COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 25400, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0004', 'item' => 'AMPLOP D COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 25600, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0005', 'item' => 'AMPLOP E COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 25800, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0006', 'item' => 'AMPLOP F COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 26000, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0007', 'item' => 'AMPLOP G COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 26200, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0008', 'item' => 'AMPLOP H COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 26400, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0009', 'item' => 'AMPLOP I COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 26600, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['item_no' => 'ATK-0010', 'item' => 'AMPLOP J COKLAT JAYA', 'lokasi' => 'L1-R1A', 'satuan' => 'PAK', 'standard_price' => 26800, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
        ]);
    }
}
