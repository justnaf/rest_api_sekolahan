<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $table = 'presensi';
    protected $fillable = [
                            'id_jadwal','nis','kelas_id','guru_id','status'
                            ];
    

    public function kelas()
    {
        return $this->belongsTo('App\Model\Kelas','kelas_id');
    }
    public function guru()
    {
        return $this->belongsTo('App\Model\Guru','guru_id');
    }
}