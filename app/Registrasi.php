<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    //
    protected $fillable=['perpustakaan','spp'];
    protected $table='registrasis';
    public $incrementing=false;
    protected $primaryKey='id';
}
