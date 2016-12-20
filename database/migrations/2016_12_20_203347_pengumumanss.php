<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pengumumanss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        //
        Schema::create('pengumumanss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('tempat');
            $table->string('waktu');
            $table->unsignedInteger('ujians_id');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ujians_id')->references('id')->on('ujians')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('pengumumanss');
    }
}
