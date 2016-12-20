<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    //
    protected $fillable=['nim','dosen_pembimbing'];
    protected $table='ujians';
    public $incrementing=false;
    protected $primaryKey='id';

    public function mahasiswas(){
        return $this->hasOne('Mahasiswa');
    }
}
