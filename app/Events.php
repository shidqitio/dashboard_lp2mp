<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table="events";
    public $timestamps = false;
    protected $fillable=["title","color","start_date","end_date"];
}
