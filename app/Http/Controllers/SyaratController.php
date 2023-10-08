<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syaratketentuan;
use Illuminate\Routing\Controller;

class SyaratController extends Controller
{
    public function index(Request $request)
    {
        $syarat=Syaratketentuan::get();
        return view('syarat/syaratketentuan', compact('syarat'));
    }
    public function edit(string $id)
    {
       $syarat = Syaratketentuan::findorfail($id);
       return view('syarat.editsyaratketentuan',compact(['syarat']));
    }

    public function update(Request $request, string $id){
        $syarat=Syaratketentuan::find($id);
        $requestUpdate=[
            'nama_layanan'=>$request->judul,
            'isi'=>$request->isi,
        ];
        $syarat->update($requestUpdate);
        return redirect('syarat/syaratketentuan')->with('toast_success','Data Berhasil DiUpdate');
    }
}
