<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;

class PolikiaController extends Controller
{
    public function index(){
        $data = Antrian::with('pasien')->where('polis', 4)->paginate(5);
        return view('pasien.polikia', compact('data'));
    }

    public function destroy(){
        $data = Antrian::with('pasien')->where('polis', 4)->delete();
        toast('Data Poli KIA Berhasil Di Reset','success');
        return redirect()->route('polikiaindex');
    }

    public function exportPDF(){
        $data = Antrian::with('pasien')->where('polis', 4)->get();
        $pdf = Pdf::loadView('exportpoli.kia', ['data' => $data]);
        return $pdf->download('export data poli KIA'.Carbon::now()->timestamp. '.pdf');
    }
}
