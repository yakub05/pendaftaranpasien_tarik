<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Pasien;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AntrianController extends Controller
{
    public function index(){
        $polis = Poli::get();
        return view('layouts/formdaftarpasien',compact('polis'));
    }

    public function store(Request $request){
        $pasien = Pasien::where('nik','=', $request->nik)->first();
        if(!$pasien){
            return back()->with('warning', "NIK belum Terdaftar");
        }
        $polis = Poli::find($request->poli);
        if($polis->kuota <= 0){
            return back()->with('warning', "Kuota Sudah Habis");
        }
        $polis->kuota = $polis->kuota - 1;
        $polis->save();

        $last_antrian = DB::table('antrians')->where('polis',$request->poli)->latest('no_antrian')->first();
        $antrian=$last_antrian ? $last_antrian->no_antrian +1 : 1;

        Antrian::create([
        'pasiens'=>$pasien->id,
        'polis'=>$request->poli,
        'no_antrian'=>$antrian,
        ]);

        DB::table('poli_pasiens')->insert([
            'polis_id'=> $request->poli,
            'pasiens_id'=> $pasien->id,
        ]);
        toast('Selamat Anda Telah Terdaftar, Silahkan cetak bukti pendaftaran ','success');
        return view('layouts/hasildaftar');
    }
}
