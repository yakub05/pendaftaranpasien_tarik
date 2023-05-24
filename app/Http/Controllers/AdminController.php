<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $adminlist = Admin::where ('nama_admin', 'LIKE', '%'.$keyword.'%')
        ->orwhere('email', 'LIKE', '%'.$keyword.'%')
        ->paginate(10);
        return view('admins/dataadmin', compact('adminlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins/tambahadmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_admin'=>'required',
            'email'    =>' required|email|unique:users,email',
            'password' =>' required|max:8',
            'gambar' => 'required|mimes:jpg,png,jpeg|max:2048'
        ];

        Validator::make($request->all(), $rules, $messages =
        [
            'nama_admin.required' => "nama harus diisi!",
            'email.required'    => 'email harus diisi!',
            'email.email'       => 'Ketikkan email dengan benar!',
            'email.unique'      => 'Email anda sudah terdaftar, gunakan email yang lainnya!',
            'password.required' => 'password harus diisi!',
            'password.max'      => 'maksimal password diisi dengan 8 angka!',
            'gambar.required' => 'gambar harus diisi!',
        ])->validate();

        $requestData = $request->all();
        $fileName = time().$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('Admin-gambar', $fileName, 'public');
        Admin::create([
            'nama_admin'=> $request->nama_admin,
             'email'=> $request->email,
             'password'=>Hash::make($request->password),
             'gambar'=>'/storage/'.$path,
          ]);
        return redirect('/admins/dataadmin')->with('toast_success', 'Data Admin Sukses Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins/detailadmin', ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $admin = Admin::find($id);
       return view('admins.editadmin',compact(['admin']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $admin = Admin::find($id);
      $requestUpdate = [
        'nama_admin'=> $request->namaadmin,
         'email'=> $request->email,
         'password'=>Hash::make($request->password),
      ];
      if($request->file('gambar')){
        $fileName = time().$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('Admin-gambar', $fileName, 'public');
        $requestUpdate['gambar']='/storage/'.$path;
      }
      $admin->update($requestUpdate);
      return redirect('admins/dataadmin')->with('toast_success','Data admin berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
