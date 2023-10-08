<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PoliumumController extends Controller
{
    public function index(){

        $data = Antrian::with('pasien')->where('polis', 1)->where('delete', null)->paginate(5);
        return view('pasien.poliumum', compact('data'));
    }

    public function destroy(){
        $data = Antrian::with('pasien')->where('polis', 1)->update(['delete'=>'hapus']);
        toast('Data Berhasil Di Reset','success');
        return redirect()->route('poliumumindex');
    }

    public function exportPDF(){
        $data = Antrian::with('pasien')->where('polis', 1)->get();
        $pdf = Pdf::loadView('exportpoli.umum', ['data' => $data]);
        return $pdf->download('export data poli umum'.Carbon::now()->timestamp. '.pdf');
    }


}
