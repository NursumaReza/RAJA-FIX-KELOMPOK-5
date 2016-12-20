<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('angkatan');
            $table->string('dosen_pembimbing');
            $table->string('judul_ta');
            $table->string('email');
            $table->unsignedInteger('nilai_id');
            $table->unsignedInteger('proposal_id');
            $table->unsignedInteger('hasil_id');
            $table->unsignedInteger('ujian_id');
            
            



            $table->foreign('nilai_id')->references('id')->on('nilais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('proposal_id')->references('id')->on('proposals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('hasil_id')->references('id')->on('hasils')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ujian_id')->references('id')->on('ujians')->onUpdate('cascade')->onDelete('cascade');
            
            
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
        Schema::drop('mahasiswas');
    }
}
