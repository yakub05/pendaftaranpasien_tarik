<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HasildaftarController extends Controller
{
    public function index(){
        return view('layouts/hasildaftar');
    }

    public function exportPDF(Request $request){
        $nik = $request->nik;
        $pasien1 = DB::table('pasiens')->where('nik', '=', $nik)->first('id');
        if ($pasien1 == null){
            return back()->with('warning','NIK tidak ditemukan');
        }
        $pasien = $pasien1->id;
        // dd($pasien);

        $data = DB::table('antrians')->where('pasiens', '=',  $pasien)->first();
        $pdf = Pdf::loadView('hasildaftar.cetak', ['data' => $data]);
        return $pdf->download('cetak pendaftaran'.Carbon::now()->timestamp. '.pdf');
    }
}
