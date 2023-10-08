<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syaratketentuan extends Model
{
    use HasFactory;
    protected $table ='layanan_kesehatans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_layanan',
        'isi',
    ];
}
