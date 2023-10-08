<?php

namespace App\Http\Controllers\Auth;

use Alert;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('formlogin/formlogin');
    }

    public function login(Request $request)
    {
        $user = Admin::where('email', $request->email)->first();

        if (!$user) {
            Alert::error('Maaf', 'email tidak ditemukan'); // cara 1 alert pake Use Alert;
            return redirect('/login');
        }

        if (Auth::Attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // cara 1 toast
            alert()->success('Anda Berhasil Login !', 'Selamat Datang Admin Puskesmas');
            return redirect('/admins/home');
        }

        alert()->error('Maaf', 'Password Salah'); // cara 2 alert
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
