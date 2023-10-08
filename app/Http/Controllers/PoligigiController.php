<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;

class PoligigiController extends Controller
{
    public function index(){
        $data = Antrian::with('pasien')->where('polis', 2)->where('delete', NULL)->paginate(5);
        return view('pasien.poligigi', compact('data'));
    }

    public function destroy(){
        // $data = Antrian::with('pasien')->where('polis', 2)->delete();
        $data = Antrian::with('pasien')->where('polis', 2)->update(['delete'=> "hapus"]);
        toast('Data Poli Gigi Berhasil Di Reset','success');
        return redirect()->route('poligigiindex');
    }

    public function exportPDF(){
        $data = Antrian::with('pasien')->where('polis', 2)->get();
        $pdf = Pdf::loadView('exportpoli.gigi', ['data' => $data]);
        return $pdf->download('export data poli gigi'.Carbon::now()->timestamp. '.pdf');
    }
}
