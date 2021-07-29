<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_BNBB extends Model
{
    public $timestamps = false;
    protected $table = 'harga_bnbb';
    protected $guard = ['id'];
}
