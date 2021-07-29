<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    public $timestamps = false;
    protected $table = 'kalender';
    protected $guarded = ['id'];
    protected $fillable = ['nama_kegiatan', 'unit', 'penanggung jawab', 'color', 'tanggal_mulai', 'tanggal_selesai'];

    public function setunitAttribute($value)
    {
        $result = $this->attributes['unit'] = implode(', ', $value);
    }

    public function gsetunitupdateAtttribute($value){
        $res = $this->attributes['unit'] = implode(', ', $value);
    }
}
