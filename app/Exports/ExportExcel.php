<?php

namespace App\Exports;

use App\Models\Pasien;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pasien::select('nik', 'nama', 'tempatlahir', 'jeniskelamin', 'alamat', 'layanan_kesehatan','no_layanan','notelp')->get();
    }
}
