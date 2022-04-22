<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhinventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whinventory', function (Blueprint $table) {
            $table->char('item_no',10)->index();
            $table->foreign('item_no')->references('item_no')->on('item');
            $table->char('period',6)->index();
            $table->double('saldo_awal',14,2);
            $table->double('in',14,2);
            $table->double('out',14,2);
            $table->double('saldo_akhir',14,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whinventory');
    }
}
