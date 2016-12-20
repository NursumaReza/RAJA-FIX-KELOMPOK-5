<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    //
    protected $fillable=['nim','nama','judul_ta','prodi','waktu','seminar','dosen_pembimbing','penyanggah','tempat'];
    protected $table='hasils';
    public $incrementing=false;
    protected $primaryKey='id';

     public function mahasiswas(){
        return $this->hasOne('Mahasiswa');
    }

}
