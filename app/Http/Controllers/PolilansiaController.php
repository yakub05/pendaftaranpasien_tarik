<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class PolilansiaController extends Controller
{
    public function index(){
        $data = Antrian::with('pasien')->where('polis', 3)->where('delete', null)->paginate(5);
        return view('pasien.polilansia', compact('data'));
    }

    public function destroy(){
        $data = Antrian::with('pasien')->where('polis', 3)->update(['delete'=>'hapus']);
        toast('Data Poli Lansia Berhasil Di Reset','success');
        return redirect()->route('polilansiaindex');
    }
    public function exportPDF1(){
        $data = Antrian::with('pasien')->where('polis', 3)->get();
        $pdf = Pdf::loadView('exportpoli.lansia', ['data' => $data]);
        return $pdf->download('export data poli lansia'.Carbon::now()->timestamp. '.pdf');
    }
}
