<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KuotaadminController extends Controller
{
    public function index(Request $request)
    {
        $polis=Poli::get();
        return view('pasien/kuotapasien', compact('polis'));
    }

    public function edit(string $id)
    {
       $polis = Poli::findorfail($id);
       return view('pasien.editkuota',compact(['polis']));
    }

    public function update(Request $request, string $id){
        $polis=Poli::find($id);
        $requestUpdate=[
            'namapoli'=>$request->namapoli,
            'kuota'=>$request->kuotapoli,
        ];
        $polis->update($requestUpdate);
        return redirect('pasien/kuotapasien')->with('toast_success','Data Berhasil DiUpdate');
    }
}
