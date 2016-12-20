<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hasils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hasils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('judul_ta');
            $table->string('prodi');
            $table->string('waktu');
            $table->string('seminar');
            $table->string('dosen_pembimbing');
            $table->string('penyanggah');
            $table->string('tempat');
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
        Schema::drop('hasils');
    }
}
