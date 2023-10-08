<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;

class PolikbController extends Controller
{
    public function index(){
        $data = Antrian::with('pasien')->where('polis', 6)->where('delete', null)->paginate(5);
        return view('pasien.polikb', compact('data'));
    }

    public function destroy(){
        $data = Antrian::with('pasien')->where('polis', 6)->update(['delete'=>'hapus']);
        toast('Data Poli KB Berhasil Di Reset','success');
        return redirect()->route('polikbindex');
    }

    public function exportPDF(){
        $data = Antrian::with('pasien')->where('polis', 6)->get();
        $pdf = Pdf::loadView('exportpoli.kb', ['data' => $data]);
        return $pdf->download('export data poli KB'.Carbon::now()->timestamp. '.pdf');
    }
}
