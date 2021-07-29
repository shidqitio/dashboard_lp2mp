<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Buku_Nonmhs extends Model
{
    public $timestamps = false;
    protected $table = 'harga_buku_nonmhs'; 
    protected $guarded = ['id'];
    
}