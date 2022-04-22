<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_details', function (Blueprint $table) {
            $table->char('mt_no',15);
            $table->foreign('mt_no')->references('mt_no')->on('mt_header');
            $table->integer('line_no');
            $table->char('item_no',10);
            $table->foreign('item_no')->references('item_no')->on('item');
            $table->double('mt_qty',14,2);
            $table->double('mt_price',14,2);
            $table->double('mt_amount',14,2);
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
        Schema::dropIfExists('mt_details');
    }
}
