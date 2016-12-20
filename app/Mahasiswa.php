<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable=['nim','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','angkatan','dosen_pembimbing','judul_ta','email','nilai_id','prosposal_id','hasil_id','ujian_id'];


    public function proposals(){
        return $this->hasOne('Proposal');
    }

    public function dosenpembimbings(){
        return $this->hasOne('DosenPembimbing');
    }

    public function ujians(){
        return $this->hasOne('Ujian');
    }

    public function nilais(){
        return $this->hasOne('Nilai');
    }

    public function hasils(){
        return $this->hasOne('Hasil');
    }
}
