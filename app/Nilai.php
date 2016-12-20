<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    protected $fillable=['nim','nama'];
    protected $table='nilais';
    public $incrementing=false;
    protected $primaryKey='id';

     public function dosenpembimbings(){
        return $this->hasMany('DosenPembimbing');
    }
     public function mahasiswas(){
        return $this->hasOne('Mahasiswa');
    }
}
