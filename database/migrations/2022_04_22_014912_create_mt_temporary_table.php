<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtTemporaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_temporary', function (Blueprint $table) {
            $table->string('status')->nullable();
            $table->char('mt_no',15)->unique();
            $table->timestamp('mt_date')->useCurrent();
            $table->char('nik',13);
            $table->integer('line_no');
            $table->char('item_no',10);
            $table->double('mt_qty',14,2);
            $table->double('mt_price',14,2);
            $table->double('mt_amount',14,2);
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('mt_temporary');
    }
}
