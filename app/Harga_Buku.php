<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Buku extends Model
{
    public $timestamps = false;
    protected $table = 'harga_buku';
    protected $guarded = ['id'];
}
