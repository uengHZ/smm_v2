<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_header', function (Blueprint $table) {
            $table->char('mt_no',15)->unique();
            $table->timestamp('mt_date')->useCurrent();
            $table->char('nik',13);
            $table->foreign('nik')->references('nik')->on('karyawan');
            $table->double('amount',14,2);
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
        Schema::dropIfExists('mt_header');
    }
}
