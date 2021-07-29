<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Nonmhs_Mitra extends Model
{
    public $timestamps = false;
    protected $table = 'harga_nonmhs_mitra';
    protected $guarded = ['id'];
}
