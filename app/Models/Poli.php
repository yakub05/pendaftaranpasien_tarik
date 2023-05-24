<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poli extends Model
{
    use HasFactory;
    protected $table ='polis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'namapoli',
        'kuota',
    ];
    public function pasiens(){
    return $this->belongsToMany(Pasien::class, 'poli_pasiens');
    }
}
