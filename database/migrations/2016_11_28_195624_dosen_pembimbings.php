<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DosenPembimbings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dosen_pembimbings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('telpon');
            $table->string('email');
            $table->string('kahlian');
            $table->unsignedInteger('mahasiswa_id');
            $table->unsignedInteger('nilai_id');
            
            



            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nilai_id')->references('id')->on('nilais')->onUpdate('cascade')->onDelete('cascade');
            
            
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('dosen_pembimbings');
    }
}
