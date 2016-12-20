<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    //
    protected $fillable=['nim','nama','tempat','waktu','ujians_id'];

      public function Ujians(){
        return $this->hasMany('Ujian');
  }

}
