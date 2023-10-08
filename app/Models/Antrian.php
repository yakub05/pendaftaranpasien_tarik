<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Antrian extends Model
{
    use HasFactory;
    protected $table ='antrians';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pasiens',
        'polis',
        'no_antrian',
        'tgl_antrian',
        'status'
    ];

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'pasiens', 'id');
    }
}
