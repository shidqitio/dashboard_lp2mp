<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

   public $timestamps = false ;
   protected $table = 'jadwal' ;
   protected $guarded = ['id'];
   
   // protected $fillable = ['tanggal','hari','nama_rapat','jam_mulai','jam_selesai','kategori'];
}
