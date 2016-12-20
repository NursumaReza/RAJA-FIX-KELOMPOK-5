<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    //
    protected $fillable=['nim','nama','judul_ta','prodi','waktu','seminar','dosen_pembimbing','penyanggah','tempat','id_mahasiswa'];
    protected $table='proposals';
    public $incrementing=false;
    protected $primaryKey='id';

     public function mahasiswas(){
        return $this->hasOne('Mahasiswa');
    }
}
