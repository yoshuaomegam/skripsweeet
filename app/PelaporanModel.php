<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelaporanModel extends Model
{
    protected $table='pelaporan';
    protected $fillable=['status'];
    public function daftar_desa(){
        return $this->belongsTo('App\DesaModel','id_desa', 'id');
       }
}
