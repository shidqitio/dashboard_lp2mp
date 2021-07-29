<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Bac_Mitra extends Model
{
    public $timestamps = false;
    protected $table = 'harga_mhs_mitra';
    protected $guarded = ['id'];
}
