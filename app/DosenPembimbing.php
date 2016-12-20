<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenPembimbing extends Model
{
    protected $fillable=['nip','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','telpon','email','kahlian','nilai_id','mahasiswa_id'];
    protected $table='dosen_pembimbings';
    public $incrementing=false;
    protected $primaryKey='id';

     public function nilais(){
        return $this->hasMany('Nilai');
    }
     public function mahasiswas(){
        return $this->hasMany('Mahasiswa');
    }

}
    
