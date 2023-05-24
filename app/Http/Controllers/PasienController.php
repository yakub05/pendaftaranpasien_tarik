<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportExcel;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(Request $request){
        $keyword = $request->keyword;
        $pasienlist = Pasien::where ('nik', 'LIKE', '%'.$keyword.'%')
        ->orwhere('nama', 'LIKE', '%'.$keyword.'%')
        ->paginate(10);
        return view('pasien/datapasien', compact('pasienlist'));
    }


    public function create()
    {
        return view('layouts/formpasienbaru');
    }

    public function store(Request $request)
    {
        $rules = [
            'nik'=>'required|unique:pasiens,nik',
            'nama'=>'required',
            'tempatlahir'    =>'required',
            'tgl_lahir' =>' required',
            'jeniskelamin'=>'required',
            'alamat'=>'required',
            'layanan_kesehatan'=>'required',
            'no_layanan'=>'required',
            'fotoktp' => 'required|mimes:jpg,png,jpeg|max:2048'
        ];

        Validator::make($request->all(), $rules, $messages =
        [
            'nik.required' => "NIK harus diisi!",
            'nik.unique'    => 'NIK sudah pernah digunakan',
            'nama.required' =>'Nama harus diisi!',
            'tempatlahir.required'=>'Tempat Lahir harus diisi!',
            'tgl_lahir.required'=>'Tanggal Lahir harus diisi!',
            'jeniskelamin.required'=>'Jeniskelamin harus diisi!',
            'alamat.required'=>'Alamat harus diisi',
            'layanan_kesehatan.required'=>'Layanan Kesehatan harus dipilih!',
            'no_layanan.required'=>'Nomor Layanan harus diisi',
            'fotoktp.required' => 'gambar harus diisi!',
        ])->validate();

        $requestData = $request->all();
        $fileName = time().$request->file('fotoktp')->getClientOriginalName();
        $path = $request->file('fotoktp')->storeAs('ktp-pasien', $fileName, 'public');
        $requestData["fotoktp"]='/storage/'.$path; Pasien::create($requestData);
        return redirect('/')->with('success', 'Data Pasien berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien/detailpasien', ['pasien' => $pasien]);
    }

    public function destroy(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }

    public function exportPDF(){
        $pasien = Pasien::all();
        $pdf = Pdf::loadView('pdf.export-data', ['pasienlist' => $pasien]);
        return $pdf->download('export-data-pasien'.Carbon::now()->timestamp. '.pdf');
    }

    public function ExportExcel(){
        return Excel::download(new ExportExcel, 'excel-data-pasien'.Carbon::now()->timestamp. '.xlsx');
    }
}
