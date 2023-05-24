<?php

namespace App\Models;

use App\Models\Poli;
use App\Models\Antrian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    protected $table ='pasiens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik',
        'nama',
        'tempatlahir',
        'tgl_lahir',
        'jeniskelamin',
        'alamat',
        'notelp',
        'layanan_kesehatan',
        'no_layanan',
        'fotoktp',
    ];
    public function polis(){
        return $this->belongsToMany(Poli::class, 'poli_pasiens');
        }
    public function antrians(){
        return $this->hasMany(Antrian::class, 'id', 'pasiens');
    }
}
