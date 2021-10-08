<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    //
    protected $table='vaksin';
    protected $fillable = [
    'nama',
    'tmpt_lahir',
    'tgl_lahir',
    'jenis_kelamin',
    'alamat',   
    'nohp',    
    'created_at',
    'updated_at'
    ];

    public function darah()
    {
       return $this->belongsTo('App\Darah', 'gol_darah_id', 'id_darah'); 
    }
   
}
