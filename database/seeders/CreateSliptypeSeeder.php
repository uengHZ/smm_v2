<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CreateSliptypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliptype')->insert([
            ['sliptype' => 1, 'slip' => 'RECEIVE BARANG', 'flag' => 'I', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['sliptype' => 2, 'slip' => 'DO BARANG', 'flag' => 'O', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
        ]);
    }
}
