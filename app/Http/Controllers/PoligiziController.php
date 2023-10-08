<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;

class PoligiziController extends Controller
{
    public function index(){
        $data = Antrian::with('pasien')->where('polis', 5)->where('delete', NULL)->paginate(5);
        return view('pasien.poligizi', compact('data'));
    }

    public function destroy(){
        $data = Antrian::with('pasien')->where('polis', 5)->update(['delete'=>"hapus"]);;
        toast('Data Poli Gizi Berhasil Di Reset','success');
        return redirect()->route('poligiziindex');
    }
    public function exportPDF(){
        $data = Antrian::with('pasien')->where('polis', 5)->get();
        $pdf = Pdf::loadView('exportpoli.gizi', ['data' => $data]);
        return $pdf->download('export data poli gizi'.Carbon::now()->timestamp. '.pdf');
    }
}
