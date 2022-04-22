<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->char('period',6);
            $table->char('item_no',10)->index();
            $table->foreign('item_no')->references('item_no')->on('item');
            $table->string('item')->nullable();
            $table->string('lokasi');
            $table->string('satuan');
            $table->string('slip_no');
            // $table->foreign('slip_no')->references('slip_no')->on('mt_header');
            $table->integer('line_no');
            // $table->foreign('line_no')->references('line_no')->on('mt_details');
            $table->timestamp('slip_date')->useCurrent();
            $table->double('slip_qty',14,2);
            $table->double('slip_price',14,2);
            $table->double('slip_amount',14,2);
            $table->string('remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
