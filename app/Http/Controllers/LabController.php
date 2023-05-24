<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;

class LabController extends Controller
{
    public function index(){
        $data = Antrian::with('pasien')->where('polis', 7)->paginate(5);
        return view('pasien.laborat', compact('data'));
    }

    public function destroy(){
        $data = Antrian::with('pasien')->where('polis', 7)->delete();
        toast('Data Laboratorium Kesehatan Berhasil Di Reset','success');
        return redirect()->route('laboratindex');
    }

    public function exportPDF(){
        $data = Antrian::with('pasien')->where('polis', 7)->get();
        $pdf = Pdf::loadView('exportpoli.lab', ['data' => $data]);
        return $pdf->download('export data Laboratorium Kesehatan'.Carbon::now()->timestamp. '.pdf');
    }
}
